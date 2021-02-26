<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation', 'user_id',
    ];

    public function questions()
    {
        return $this->hasMany('App\Models\Question')->with('reponses');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
