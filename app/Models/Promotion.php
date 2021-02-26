<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation', 'annee', 'filiere_id',
    ];

    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
