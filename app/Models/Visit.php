<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'dateDeReunion',
        'heure'
    ];
}
