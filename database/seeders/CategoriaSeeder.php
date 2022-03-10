<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $categoria = new Categoria();
        $categoria -> nombre = 'Deportes';
        $categoria -> descripcion = 'Noticias sobre la actualidad deportiva';
        $categoria -> save();

        $categoria = new Categoria();
        $categoria -> nombre = 'Política';
        $categoria -> descripcion = 'Noticias sobre la actualidad política';
        $categoria -> save(); */

        Categoria::factory(10) -> create();
    }
}
