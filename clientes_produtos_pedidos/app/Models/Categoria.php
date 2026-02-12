<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Permite que a criação da categoria passando o nome direto no array
    protected $fillable = ['nome'];

    // Relacionamento (Uma categoria tem muitos produtos)
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}