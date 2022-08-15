<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastros extends Model
{
    use HasFactory;

    protected $table = 'CADASTROS';
    protected $primaryKey = 'id_cadastro';
    protected $fillable = ['nome', 'carro', 'saldo','placa', 'cpf', 'rg', 'endereco', 'telefone'];

    public function cartao(){
        return $this->hasMany(Cartoes::class,'id_cartao');
    }

}
