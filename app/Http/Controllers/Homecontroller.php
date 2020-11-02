<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;

class Homecontroller extends Controller
{
    //
    function index()
    {
        $data = gallery::all();
        return view('home',['gallerys'=>$data]);
    }
}
