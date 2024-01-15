<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function index()
    {
        $data = Ideas::all();
        $count = Ideas::first();
        return view("dashboard", ["data" => $count]);
    }
}
