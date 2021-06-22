<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarist extends Model
{
    use HasFactory;

    protected $fillable = ['nome_completo', 'cpf','email','complemento','telefone','logradouro','numero','bairro','cidade','estado','cep','codigo_ibge','foto_usuario'];
    
}
