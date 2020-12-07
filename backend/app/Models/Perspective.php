<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perspective extends Model
{
    public function question()
    {
        return $this->belongsTo(\App\Models\Question::class);
    }
}
