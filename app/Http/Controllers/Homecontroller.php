<?php

namespace App\Http\Controllers;
use App\Models\Channel;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){

        
        return view('Home.home');
    }
}
