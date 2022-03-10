<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    // Relacionamos el modelo con la tabla
    protected $table = 'autores';

    // Seleccionamos que campo es la clave primaria
    protected $primaryKey = 'id';

    // Seleccionamos que campos podran ser rellenados
    protected $fillable = ['nombre', 'apellido', 'email'];

    // Escondemos este campo de nuestras vistas
    protected $hidden = ['id'];

    public function noticias() {
        return $this -> hasMany(Noticia::class);
    }

}
