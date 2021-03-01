<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assertion extends Model
{
    use HasFactory;
    protected $fillable = [
        "texte", "question_id",
    ];

    public function question()
    {
        return $this->belongsTo("App\Models\Question");
    }
}
