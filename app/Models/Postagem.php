<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Postagem extends Model
{
    use HasFactory;

    protected $table = 'postagens';

    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class, 'postagem_id', 'id');
    }

    public function curtidas(): HasMany
    {
        return $this->hasMany(Curtida::class, 'postagem_id', 'id');
    }

}
