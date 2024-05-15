<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DenunciaUsuario extends Model
{
    use HasFactory;
    protected $table = 'denuncia_usuario';

    public function denunciante(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'denunciante_id');
    }

    public function denunciado(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'denunciado_id');
    }
}

