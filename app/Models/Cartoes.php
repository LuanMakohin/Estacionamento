<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartoes extends Model
{
    use HasFactory;
    protected $table = 'CARTOES';
    protected $primaryKey = 'id_cartao';
    protected $fillable = ['hora_entrada', 'vaga', 'saldo'];
}
