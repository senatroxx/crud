<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function create()
    {
        
        return view('quiz.create');
    }

    public function store(Request $request)
    {
        $valid = $this->validate($request, [
            'question.*' => 'filled',
            'option_1.*' => 'filled',
            'option_2.*' => 'filled',
            'option_3.*' => 'filled',
            'option_4.*' => 'filled',
            'option_5.*' => 'filled',
            'correct.*' => 'filled',
        ]);

        
        for ($i=0; $i < count($request->question); $i++) { 
            $quiz = new Quiz;
            $quiz->question = $request->question[$i];
            $quiz->option_1 = $request->option_1[$i];
            $quiz->option_2 = $request->option_2[$i];
            $quiz->option_3 = $request->option_3[$i];
            $quiz->option_4 = $request->option_4[$i];
            $quiz->option_5 = $request->option_5[$i];
            $quiz->correct = $request->correct[$i];
            $quiz->save();
        }
        
        return redirect()->route('index')->with('success', 'Success insert data');
    }

    public function show($id)
    {
        $quiz = Quiz::find($id);

        return view('quiz.show', ['quiz' => $quiz]);
    }

    public function edit($id)
    {
        $quiz = Quiz::find($id);

        return view('quiz.edit', ['quiz' => $quiz]);
    }

    public function update(Request $request, $id)
    {
        $valid = $this->validate($request, [
            'question.*' => 'filled',
            'option_1.*' => 'filled',
            'option_2.*' => 'filled',
            'option_3.*' => 'filled',
            'option_4.*' => 'filled',
            'option_5.*' => 'filled',
            'correct.*' => 'filled',
        ]);

        $quiz = Quiz::find($id);
        $quiz->question = $request->question;
        $quiz->option_1 = $request->option_1;
        $quiz->option_2 = $request->option_2;
        $quiz->option_3 = $request->option_3;
        $quiz->option_4 = $request->option_4;
        $quiz->option_5 = $request->option_5;
        $quiz->correct = $request->correct;
        $quiz->save();

        return redirect()->route('index')->with('success', 'Success update data');
    }

    public function destroy($id)
    {
        $quiz = Quiz::find($id);
        $quiz->delete();

        return redirect()->route('index')->with('success', 'Success delete data');
    }
}
