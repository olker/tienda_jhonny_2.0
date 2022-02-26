<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    public function imagens(): HasMany
    {
        return $this->hasMany(Imagen::class);
    }

    public function doblajes(): BelongsToMany
    {
        return $this->belongsToMany(Doblaje::class)->withTimestamps();
    }
    public function subtitulados(): BelongsToMany
    {
        return $this->belongsToMany(Subtitulado::class)->withTimestamps();
    }
    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }
    public function generos(): BelongsToMany
    {
        return $this->belongsToMany(Genero::class)->withTimestamps();
    }
    public function clientes(): BelongsToMany
    {
        return $this->belongsToMany(Cliente::class)->withTimestamps();
    }
}
