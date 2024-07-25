<?php
namespace App\Models;

//use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'interest',
    ];
}
