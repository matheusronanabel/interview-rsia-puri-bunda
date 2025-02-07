<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.units.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string'
        ]);

        Unit::create($validatedData);

        return redirect()->route('dashboard.units.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = Unit::find($id);

        return view('dashboard.units.view',compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unit = Unit::find($id);

        return view('dashboard.units.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string'
        ]);

        $unit = Unit::find($id);

        $unit->update($validatedData);

        return redirect()->route('dashboard.units.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit = Unit::find($id);

        $unit->delete();

        return redirect()->route('dashboard.units.index');
    }
}
