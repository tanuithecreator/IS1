<?php

namespace App\Http\Controllers;

use App\Models\Recipient; 
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipientController extends Controller
{
    public function index(Request $request)
    {
        $query = Donation::doesntHave('recipients');
//dd($query);
        if ($request->has('location')) {
            $query->where('location', 'like', '%' . $request->input('location') . '%');
        }

        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('description', 'like', '%' . $request->input('search') . '%')
                  ->orWhere('item', 'like', '%' . $request->input('search') . '%');
            });
        }

        $donations = $query->get();
       //dd($donations);
        return view('recipients.index', compact('donations'));
    }

    public function claim(Request $request, $id)
{
    $donation = Donation::findOrFail($id);
    $user = Auth::user();

    if ($user->usertype !== 'recipient') {
        return redirect()->back()->withErrors(['You are not authorized to claim this donation.']);
    }

   
    $recipient = $user->recipient; 

    if (!$recipient) {
        return redirect()->back()->withErrors(['Recipient details not found.']);
    }

    $donation->recipients()->attach($recipient->recipient_id);

    return redirect()->route('recipients.index')->with('success', 'Donation claimed successfully!');
}

}
