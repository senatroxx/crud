<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = "quiz";

    protected $fillable = [
        'question', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'correct'
    ];
}
