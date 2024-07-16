<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Payment;
//use App\Models\User;


class PaymentController extends Controller
{

    // Payments Logic
    public function storePayment(Request $request)
    {
        try {
            // Validate data
            $request->validate([
                'phone_number' => 'required|string',
                'amount' => 'required|string',
            ]);

            // Get the donor details
            $user = Auth::user()->first();

            

            // Format phone number
            $phoneNumber = preg_replace('/\D/', '', $request->phone_number); // Remove all non-numeric characters
            if (substr($phoneNumber, 0, 1) === '0') {
                $phoneNumber = '254' . substr($phoneNumber, 1);
            } elseif (substr($phoneNumber, 0, 3) !== '254') {
                $phoneNumber = '254' . $phoneNumber;
            }

            // Ensure phone number starts with '2547'
            if (substr($phoneNumber, 0, 4) !== '2547') {
                return redirect()->back()->with('error', 'Invalid phone number. It must start with 2547.');
            }

            $final_phone_number = intval($phoneNumber);

            // Calculate the due date (5th of the next month)
          //  $due_date = Carbon::now()->startOfMonth()->addMonths(1)->addDays(4);

            // Initiate an STK Push
            $response = $this->initiateSTKPush($final_phone_number);
  //dd($response);
            if ($response['ResponseCode'] == "0") {
                // Create a new payment
                $payment = Payment::create([
                    'phone_number'=> $request->phone_number,
                    'amount'=> $request->amount,
                   //'reference'=> $response['AccountReference'],
                    //'description'=>$request->description,
                    'MerchantRequestID'=>$response['MerchantRequestID'],
                    'CheckoutRequestID'=>$response['CheckoutRequestID'],
                    'status'=>'pending',
                    //'MpesaReceiptNumber',
                    'ResultDesc'=>$response['ResponseDescription'],
                    'TransactionDate'=>now(),
                ]);
                return back()->with('success', 'STK Push initiated successfully. Check the phone number added');
            } else {
                return back()->withErrors(['error' => 'Failed to initiate STK Push.']);
            }
        } catch (Exception $e) {
            Log::error('Failed to store payment', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to process payment.');
        }
    }

    // Getting the saf token 
    public function token()
    {
        try {
            $consumerKey = getenv('MPESA_CONSUMER_KEY');
            $consumerSecret = getenv('MPESA_CONSUMER_SECRET');
            $url = getenv('MPESA_TOKEN_URL');

            $response = Http::withBasicAuth($consumerKey, $consumerSecret)->get($url);

            return $response['access_token'];
        } catch (Exception $e) {
            Log::error('Failed to get SAF token', ['error' => $e->getMessage()]);
            return null;
        }
    }

    // STK Push Logic
    public function initiateSTKPush($phoneNumber)
    {
        try {
            //Get all these requirements from developer.MPESA

            // Calling the token
            $accessToken = $this->token();
            // URL to deal with mpesa express
            $url = getenv('MPESA_EXPRESS_URL');
            // Variable to deal with mpesa passkey
            $passkey = getenv('MPESA_PASSKEY');
            $businessShortCode = 174379;
            $timestamp = Carbon::now()->format('YmdHis');
            $password = base64_encode($businessShortCode . $passkey . $timestamp);
            $transactionType = 'CustomerPayBillOnline';
            $amount = 1;
            $PartyA = $phoneNumber;
            $PartyB = 174379;
            $phone_number = $phoneNumber;
            $callbackUrl = 'https://leech-keen-moderately.ngrok-free.app/payments/response';
            $accountReference = getenv('APP_NAME');
            $TransactionDesc = 'Money Donation';

            $response = Http::withToken($accessToken)->post($url, [
                'BusinessShortCode' => $businessShortCode,
                'Password' => $password,
                'Timestamp' => $timestamp,
                'TransactionType' => $transactionType,
                'Amount' => $amount,
                'PartyA' => $PartyA,
                'PartyB' => $PartyB,
                'PhoneNumber' => $phone_number,
                'CallBackURL' => $callbackUrl,
                'AccountReference' => $accountReference,
                'TransactionDesc' => $TransactionDesc
            ]);

            return $response;
        } catch (Exception $e) {
            Log::error('Failed to initiate STK Push', ['error' => $e->getMessage()]);
            return ['ResponseCode' => '1'];
        }
    }

    // STK Callback
    public function callback(Request $request)
    {
        try {
            $data = json_decode($request->getContent(), true);

            $callbackData = $data['Body']['stkCallback'];
            $CheckoutRequestID = $callbackData['CheckoutRequestID'];

            // Save the data to a file for testing
            Storage::disk('local')->put('stk.txt', json_encode($callbackData));

            // Retrieve payment entry
            $payment = Payment::where('CheckoutRequestID', $CheckoutRequestID)->first();

            // Process the callback data as needed
            if ($callbackData['ResultCode'] == 0) {
                // Successful transaction logic
                $amount = $callbackData['CallbackMetadata']['Item'][0]['Value'];
               //  $mpesaReceiptNumber = $callbackData['CallbackMetadata']['Item'][1]['Value'];
                // $transactionDate = $callbackData['CallbackMetadata']['Item'][3]['Value'];
                // $phoneNumber = $callbackData['CallbackMetadata']['Item'][4]['Value'];

                $payment->update([
                    'amount'=>$amount,
                    'status'=>'completed',
                    'TransactionDate'=>now(),
                //    'MpesaReceiptNumber'=>$mpesaReceiptNumber,
                ]);
            } else {
                // Failed transaction logic
                $failureReason = $callbackData['ResultDesc'];
                $payment->update([
                    'status' => 'failed',
                    //'failure_reason' => $failureReason
                ]);
                Log::error('Transaction failed', ['reason' => $failureReason]);
            }
            return response()->json(['status' => 'success']);
        } catch (Exception $e) {
            Log::error('STK Callback failed', ['error' => $e->getMessage()]);
            return response()->json(['status' => 'error'], 500);
        }
    }
}