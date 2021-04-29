<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    //  Campos que são autorizados a serem alterados 
    protected $fillable = ['nome', 'ano'];
    public function relFaixas(){
        return $this->hasMany(related:'App\Faixa', foreignKey:'album_id');
    }
}