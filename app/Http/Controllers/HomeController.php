<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quiz = Quiz::all();

        return view('home', ['quiz' => $quiz]);
    }
}
