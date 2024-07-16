<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'item', // Add other fillable fields as needed
        'description',
        'Quantity',
        'location'
        // Add more fields here as per your application's requirements
    ];

    protected $primaryKey = 'donationsid';


   
}


