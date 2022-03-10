<?php

namespace Database\Factories;

use App\Models\Autor;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this -> faker -> word(),
            'contenido' => $this -> faker -> text(255),
            'fecha' => $this -> faker -> date(),
            'visible' => $this -> faker -> randomElement(['si', 'no']),
            'autor_id' => Autor::all() -> random() -> id,
            'categoria_id' => Categoria::all() -> random() -> id
        ];
    }
}
