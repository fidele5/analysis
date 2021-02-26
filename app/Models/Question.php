<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'enonce', 'questionnaire_id', 'rubrique_id',
    ];

    public function rubrique()
    {
        return $this->belongsTo('App\Models\Rubrique');
    }

    public function reponses()
    {
        return $this->hasMany('App\Models\Reponse');
    }

    public function questionnaire(){
        return $this->belongsTo("App\Models\Questionnaire");
    }

    public function assertions()
    {
        return $this->hasMany('App\Models\Assertion');
    }
}
