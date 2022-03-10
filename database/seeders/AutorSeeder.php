<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $autor = new Autor();
        $autor -> nombre = 'Eduard';
        $autor -> apellido = 'Gallardo';
        $autor -> email = 'dawbevidalgallardo@iesjoanramis.org';
        $autor -> save();

        $autor = new Autor();
        $autor -> nombre = 'Andreu';
        $autor -> apellido = 'Taltavull';
        $autor -> email = 'dawbamendeztaltavull@iesjoanramis.org';
        $autor -> save(); */

        Autor::factory(100) -> create();
    }
}
