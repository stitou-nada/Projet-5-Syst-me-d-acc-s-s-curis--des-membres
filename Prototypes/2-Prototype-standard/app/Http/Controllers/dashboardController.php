<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function index(){
        $tache = tache::all();
        return view('dashboard',compact('tache'));
    }
}
