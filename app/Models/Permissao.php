<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permissao';

    public function menu() {
        return $this->hasOne('Models\Menu');
    }
}
