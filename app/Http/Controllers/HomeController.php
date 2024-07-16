<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
{
    if (Auth::check()) {
        // User is authenticated
        if (Auth::user()->usertype == 'user') {
            return view ('home');;
        } else {
            return view('home');
        }
    } else {
        // User is not authenticated, handle this case (e.g., redirect to login)
        return view('home');
    }
}
}
