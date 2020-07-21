<?php

namespace App\Http\Controllers;

use App\Score;
use App\Quiz;
use Illuminate\Http\Request;

class ScoreController extends Controller
{

    public function addScore(Request $request, $id)
    {
        $inputName = "answer-".$id;

        $quiz = Quiz::find($id);

        if ($quiz->correct == $request->$inputName) {
            $score = Score::findOrCreate(1);
            if ($score->score == null) {
                $score->score = 1;
            }else{
                $score->score = $score->score + 1;
            }
            $score->save();
        }

        return redirect()->route('index');
    }
}
