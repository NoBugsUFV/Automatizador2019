<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionalidade extends Model
{
    protected $fillable = ["id","nome","valor","descricao"];
}
