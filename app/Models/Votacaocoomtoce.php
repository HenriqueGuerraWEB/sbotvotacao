<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votacaocoomtoce extends Model
{
    use HasFactory;
    protected $table = 'votos_sbot_create';
    protected $fillable = [
        'eleitor_id', 'candidato_id', 'tipo_voto'
    ];    
}
