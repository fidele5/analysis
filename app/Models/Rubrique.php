<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
    ];

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
}
