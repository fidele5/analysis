<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'sentiment', 'question_id',
    ];

    public function reponse()
    {
        return $this->belongsTo('App\Models\Reponse');
    }
}
