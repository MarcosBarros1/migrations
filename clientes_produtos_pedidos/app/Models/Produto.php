<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Permite preencher todos esses campos de uma vez
    protected $fillable = [
        'nome',
        'preco',
        'quantidade',
        'ativo',
        'categoria_id'
    ];

    // Relacionamento (Um produto pertence a uma categoria)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}