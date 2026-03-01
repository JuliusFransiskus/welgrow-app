<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = \App\Models\Vendor::latest()->paginate(10);
        return view('vendors.vendor', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 return view('vendors.vendor_new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string',
            'tax_id' => 'nullable|string|max:50',
            'type' => 'nullable|string|max:50',
            'pic' => 'nullable|string|max:255',
            'code' => 'nullable|string|max:255',
        ]);
        Vendor::create($request->all());
        return redirect()
            ->route('vendors.index')
            ->with('success', 'vendor created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $vendor = Vendor::findOrFail($id);
    return view('vendors.vendor_edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        $vendor->update($request->all());
        return redirect()->route('vendors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return redirect()->route('vendors.index');
    }
}
