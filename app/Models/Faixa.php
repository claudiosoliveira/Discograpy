<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faixa extends Model
{
   protected $fillable = [
        'nome',
        'duracao',
        'album_id',
        'numero',
   ];
}
