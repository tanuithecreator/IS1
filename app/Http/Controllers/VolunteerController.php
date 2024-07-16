<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function Volregister()
    {
        return view('volunteer.Volregister');
    }
    
    
    
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
           
            'phone' => 'required|string|max:12',
            'interest' => 'required|string|max:255',
        ]);

        Volunteer::create($validated);

        return redirect()->back()->with('success', 'Thank you for registering as a volunteer!');
    }
}
