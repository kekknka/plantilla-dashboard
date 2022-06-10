<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return redirect()->route('dashboard');
        }
        else
        {
            return view('index');
        }
    }
}
