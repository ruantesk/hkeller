<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'sexo',
        'pai_id',
        'mae_id',
    ];

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    public function pai()
    {
        return $this->hasOne(Cao::class, 'pai_id');
    }

    public function mae()
    {
        return $this->hasOne(Cao::class, 'mae_id');
    }
}
