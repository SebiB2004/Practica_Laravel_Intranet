<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimulController extends Controller
{
    public function index(){
        return view('salut');
    }
}
