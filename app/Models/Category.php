<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'item', // Add other fillable fields as needed
        'description',
        'location'
        // Add more fields here as per your application's requirements
    ];

   
}


