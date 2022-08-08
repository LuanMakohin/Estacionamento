<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    use HasFactory;
    protected $table = 'VAGAS';
    protected $primaryKey = 'id_vaga';
    protected $fillable = ['cheia'];
}
