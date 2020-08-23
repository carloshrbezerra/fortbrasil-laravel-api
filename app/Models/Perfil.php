<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $fillable = array(
        'nome',
        'ativo'
    );
    protected $visible = array(
        'ativo',
        'id',
        'nome'
    );

    public function usuario() {
        return $this->belongsToMany('User', 'ref_usuario_perfil');
    }

    public function permissoes() {
        return $this->hasMany('Models\Permissao');
    }
}
