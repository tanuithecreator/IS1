<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_number', // Add other fillable fields as needed
        'amount',
        'reference',
        //'description',
        'MerchantRequestID',
        'CheckoutRequestID',
        'status',
        'MpesaReceiptNumber',
        'ResultDesc',
        'TransactionDate',
      
        // Add more fields here as per your application's requirements
    ];
}
