<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnologies = ['Html', 'Css', 'Mysql', 'js', 'php'];

        foreach ($tecnologies as $tecnology) {

            $newTecnology = new Tecnology();
            $newTecnology->name = $tecnology;
            $newTecnology->slug = Str::slug($tecnology, '-');
            $newTecnology->save();
        }
    }
}