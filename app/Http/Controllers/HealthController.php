<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index(){
        return view('dashboard.health.index');
    }

    public function create(){
        return view('dashboard.health.create');
    }
}
