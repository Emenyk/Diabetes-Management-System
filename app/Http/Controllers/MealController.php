<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index(){
        return view('dashboard.meal.index');
    }

    public function create(){
        return view('dashboard.meal.create');
    }

    public function plan(){
        return view('dashboard.meal.plans');
    }
}
