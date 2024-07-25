<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    protected $fillable = ['name', 'location'];

    public function donations()
    {
        return $this->belongsToMany(Donation::class, 'donation_recipient');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $primaryKey = 'recipient_id';

}
