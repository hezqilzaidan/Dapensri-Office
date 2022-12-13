<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = Data::where('user_id', Auth::user()->id)->first();
        return view('home', compact('data'));
    }
}
