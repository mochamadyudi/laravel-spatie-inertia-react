<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class Dashboard extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Index(Request $request){

        return Inertia::render('Dashboard');
    }
}
