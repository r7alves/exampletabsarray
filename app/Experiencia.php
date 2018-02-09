<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    //
     protected $fillable = 
    [
        'descricao',
        'empresa',
        'pessoa_id'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
