<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

// Modelo base extendendo o Model default
// Inclui atributos customizados.

class BaseModel extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'data_nascimento',
        'data_evento',
        // add any other date attributes here
    ];

    /**
     * Get a formatted date attribute.
     *
     * @param  string  $attribute
     * @return string
     */
    public function getAttribute($attribute)
    {
        $value = parent::getAttribute($attribute);

        if (in_array($attribute, $this->dates) && $value) {
            return Carbon::parse($value);
        }

        return $value;
    }
}
