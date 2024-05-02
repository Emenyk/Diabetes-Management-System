<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicationController extends Controller
{
    public function index(){
        return view('dashboard.medication.index');
    }

    public function create(){
        return view('dashboard.medication.create');
    }
}
