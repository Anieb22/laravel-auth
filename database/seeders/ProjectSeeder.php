<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newProject = new Project();
            $newProject->azienda = $faker->word();
            $newProject->nome_progetto = $faker->word();
            $newProject->descrizione = $faker->paragraph();
            $newProject->passaggi = $faker->paragraph();
            $newProject->data_di_creazione = $faker->date('Y_m_d');
    
            $newProject->save();
        }
    }
}
