<?php

namespace App\Http\Controllers;


use App\Models\Donations;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donations::paginate(10);
        return view('admin.donations.category.index', [
            'donations' => $donations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.donations.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
        ]);

        Donations::create([
            'name' => $request->name,
            'amount' => $request->amount,
             
        ]);

        return redirect('donation')->with('status','donation Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donations $donation)
    {
        return view('admin.donations.category.show', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donations $donation)
    {
        return view('admin.donations.category.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donations $donation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
        ]);

        $donation->update([
            'name' => $request->name,
            'amount' => $request->amount,
  
        ]);

        return redirect('donation')->with('status','donation Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donations $donation)
    {
        $donation->delete();
        return redirect('donation')->with('status','donation Deleted Successfully');

    }
}
