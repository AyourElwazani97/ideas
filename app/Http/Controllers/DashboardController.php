<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $idea = new Ideas();
        $data = $idea::orderBy('created_at','DESC')->get();
        return view("dashboard",["data" => $data]);
    }
}
