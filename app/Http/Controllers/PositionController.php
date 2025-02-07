<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.positions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.positions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string'
        ]);

        Position::create($validatedData);

        return redirect()->route('dashboard.positions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $position = Position::find($id);

        return view('dashboard.positions.view',compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $position = Position::find($id);

        return view('dashboard.positions.edit',compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string'
        ]);

        $position = Position::find($id);

        $position->update($validatedData);

        return redirect()->route('dashboard.positions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $position = Position::find($id);

        $position->delete();

        return redirect()->route('dashboard.positions.index');
    }
}
