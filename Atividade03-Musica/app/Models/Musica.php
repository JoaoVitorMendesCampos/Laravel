<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable = [
      'nome_musica',
       'autor',
       'album',
        'ano_publicacao',
        'descricao'
   ]; 
}
