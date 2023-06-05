<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Evento extends BaseModel
{
    use HasFactory;

    protected $dates = ['data_evento'];

    protected $fillable = ['cao_id', 'data_evento', 'descricao'];

    public function caos()
    {
        return $this->belongsTo(Cao::class);
    }
}
