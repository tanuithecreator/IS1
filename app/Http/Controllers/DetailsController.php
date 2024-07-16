<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function food()
    {
        return view('details.food');
    }
    public function edu()
    {
        return view('details.edu');
    }
    public function relief()
    {
        return view('details.relief');
    }
    public function clothes()
    {
        return view('details.clothes');
    }
    public function volunteer()
    {
        return view('details.volunteer');
    }
    public function money()
    {
        return view('details.money');
    }
}
