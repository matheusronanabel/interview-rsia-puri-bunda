<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginLog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function username(){

        return 'username';
    
    }

    function index() : View {

        return view('auth.login');
    
    }

    function authenticate(Request $request) : RedirectResponse {
        
        $validatedData = $request->validate([
            
            'username' => 'required|string',

            'password' => 'required|string'
        
        ]);

        if (Auth::attempt($validatedData)) {

            $userId = Auth::user()->id;

            LoginLog::create([
                'user_id' => $userId,
                'login_time' => now()
            ]);
        
            $request->session()->regenerate();

            return redirect()->intended('dashboard');

        }
         
        return back()->withErrors([
            'email' => 'Kombinasi username atau password yang anda berikan salah.'
        ]);

    }
}
