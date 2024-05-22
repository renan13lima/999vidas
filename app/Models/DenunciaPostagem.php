<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DenunciaPostagem extends Model
{
    use HasFactory;
    protected $table = 'denuncia_postagem';

    public function denunciante(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'denunciante_id');
    }

    public function denunciado(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'denunciado_id');
    }

    public function postagem(): HasOne
    {
        return $this->hasOne(Postagem::class, 'id', 'postagem_id');
    }
}
