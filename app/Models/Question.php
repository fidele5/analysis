<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'ennonce', 'questionnaire_id', 'rubrique_id',
    ];

    public function rubrique()
    {
        return $this->belongsTo('App\Models\Rubrique');
    }

    public function reponses()
    {
        return $this->hasMany('App\Models\Reponse');
    }

    public function assertions()
    {
        return $this->hasMany('App\Models\Assertion');
    }
}
