<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filiere = new Filiere();
        $filiere->nom = "Genie Logiciel";
        $filiere->save();
    }
}
