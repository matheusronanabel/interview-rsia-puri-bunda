<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserLogController extends Controller
{
    function index() : View {
        return view('dashboard.logs.index');
    }
}
