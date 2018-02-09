<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = 
    [
        'rua',
        'numero',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

}
