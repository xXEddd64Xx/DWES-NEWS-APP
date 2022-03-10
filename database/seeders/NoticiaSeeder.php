<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $noticia = new Noticia();
        $noticia -> titulo = 'Partidazo del Barça';
        $noticia -> contenido = 'El Barcelona aplastó al Real Madrid.';
        $noticia -> fecha = '2022-02-14';
        $noticia -> visible = 'si';
        $noticia -> autor_id = '2';
        $noticia -> categoria_id = '1';
        $noticia -> save();

        $noticia = new Noticia();
        $noticia -> titulo = 'Enrique, alcalde';
        $noticia -> contenido = 'El candidato Vizcaino ganó las elecciones.';
        $noticia -> fecha = '2022-01-23';
        $noticia -> visible = 'no';
        $noticia -> autor_id = '1';
        $noticia -> categoria_id = '2';
        $noticia -> save(); */

        Noticia::factory(500) -> create();
    }
}
