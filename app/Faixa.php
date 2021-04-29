<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faixa extends Model
{
    protected $table='faixas';
    //  Campos que são autorizados a serem alterados
    protected $fillable = ['numero', 'nome', 'duracao'];
    public function relAlbums(){
        return $this->hasOne(related: 'App\Album', foreignKey: 'id', localKey: 'album_id');
    }
}
