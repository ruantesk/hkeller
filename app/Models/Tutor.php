<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tutor extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'telefone',
    ];
}
