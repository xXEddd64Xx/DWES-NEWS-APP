<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $primaryKey = 'id';

    protected $fillable = ['titulo', 'contenido', 'fecha', 'autor_id', 'categoria_id'];

    protected $hidden = ['id'];

    public function autor() {
        return $this -> belongsTo(Autor::class);
    }

    public function categoria() {
        return $this -> belongsTo(Categoria::class);
    }
}
