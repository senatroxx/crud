<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Text;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quiz = Quiz::all();
        $text = Text::all();

        return view('home', ['quiz' => $quiz, 'text' => $text]);
    }
}
