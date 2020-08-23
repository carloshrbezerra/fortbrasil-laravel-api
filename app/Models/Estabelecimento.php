<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $table = 'estabelecimento';
    protected $fillable = array(
        "ativo",
        "localizacao",
		"data_abertura",
		"email",
		"nome",
		"nome_fantasia",
		"telefone",
		"atividade"
	);
}
