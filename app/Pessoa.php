<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //
    protected $fillable = 
    [
        'nome',
        'nascimento',
        'endereco_id'
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }

    public function experiencias()
    {
        return $this->hasMany(Experiencia::class);
    }

}
