<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    public function index(Request $request)
    {
        // Start building the query to retrieve donations
        $query = Donation::query();

        // Filter by location if location parameter is provided in the request
        if ($request->has('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        // Search for donations if search term is provided in the request
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('item', 'like', "%$searchTerm%")
                  ->orWhere('description', 'like', "%$searchTerm%");
            });
        }

        // Retrieve filtered donations
        $donations = $query->get();

        // Return the view with donations data
        return view('donations.index', compact('donations'));
    }

    public function create()
    {
        // Method to show the form to create a new donation
        return view('donations.create');
    }

    public function store(Request $request)
    {
        // Method to store a newly created donation
        $validatedData = $request->validate([
            'item' => 'required|max:255',
            'description' => 'nullable',
            'quantity' => 'required|max:255',
            'location' => 'nullable|max:255',
        ]);

        Donation::create($validatedData);

       return redirect()->route('donations.index');
    }

    public function edit(Donation $donation)
    {  
        //dd($donation);
       // $donation = Donation::findOrFail($donationsid); 
       return view('donations.edit', compact('donation'));
    }

    public function update(Request $request, Donation $donation)
    {
        // Method to update the specified donation
        $validatedData = $request->validate([
            'item' => 'required|max:255',
            'description' => 'nullable',
            'quantity' => 'nullable|max:255',
            'location' => 'nullable|max:255',
            
        ]);

        $donation->update($validatedData);

        return redirect()->route('donations.index')->with('success', 'Donation updated successfully!');
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();

        return redirect()->route('donations.index')->with('success', 'Donation deleted successfully.');
    }
   public function mpesa()
   {
    return view('donations.mpesa');
   }
}
