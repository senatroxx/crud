<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table = "text";

    protected $fillable = [
        'content'
    ];
}
