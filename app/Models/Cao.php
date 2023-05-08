<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cao extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['data_nascimento'];

    protected $fillable = [
        'nome',
        'raca',
        'cor',
        'porte',
        'data_nascimento',
    ];
}
