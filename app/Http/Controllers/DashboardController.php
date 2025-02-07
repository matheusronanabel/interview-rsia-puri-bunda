<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index(): View
    {

        $positionCount = count(\App\Models\Position::all());

        $unitCount = count(\App\Models\Unit::all());

        $userLoginCount = count(\App\Models\LoginLog::all());

        $userCount = count(\App\Models\User::all());

        $mostLoggedInUsers = User::select('users.*', DB::raw('COUNT(login_logs.id) as login_count'))
            
        ->join('login_logs', 'users.id', '=', 'login_logs.user_id')
        
        ->groupBy('users.id')
        
        ->having('login_count', '>', 25)
        
        ->orderByDesc('login_count')
        
        ->limit(10)

        ->get();

        return view('dashboard.index', [
            'positionCount' => $positionCount,
            'unitCount' => $unitCount,
            'userLoginCount' => $userLoginCount,
            'userCount' => $userCount,
            'mostLoggedInUsers' => $mostLoggedInUsers
        ]);
    }
}
