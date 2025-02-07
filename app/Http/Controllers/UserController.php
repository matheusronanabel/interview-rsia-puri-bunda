<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Unit;
use App\Models\User;
use App\Models\UserPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = Unit::all();

        return view('dashboard.users.create',[
            'units' => $units
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'unit_id' => 'required|string',
            'username' => 'required|unique:users',
            'password' => 'required|string',
            'position_id' => 'required|array',
            'join_date' => ['required',Rule::date()->afterToday()]
        ]);

        $userData = User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'join_date' => $validatedData['join_date'],
            'unit_id' => $validatedData['unit_id'],
        ]);

        foreach ($validatedData['position_id'] as $position) {
            UserPosition::create([
                'user_id' => $userData->id,
                'position_id' => $position
            ]);
        }
        
        return redirect()->route('dashboard.users.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return view('dashboard.users.view',[
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        $units = Unit::all();

        return view('dashboard.users.edit',[
            'user' => $user,
            'units' => $units
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'unit_id' => 'required|string',
            'username' => ['required',Rule::unique('users')->ignore($user->id)],
            'password' => 'required|string',
            'position_id' => 'required|array',
            'join_date' => ['required',Rule::date()->afterToday()]
        ]);

        $user->update($validatedData);

        foreach ($validatedData['position_id'] as $position) {
            UserPosition::create([
                'user_id' => $user->id,
                'position_id' => $position
            ]);
        }
        
        return redirect()->route('dashboard.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('dashboard.users.index');
    }

    public function newPosition(Request $request){

        $validatedData = $request->validate([
        
            'name' => 'required|string'
        
        ]);

        Position::create($validatedData);

        return redirect()->back();
    }
}
