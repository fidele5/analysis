<?php

namespace Database\Seeders;

use App\Models\Rubrique;
use Illuminate\Database\Seeder;

class RubriqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rubrique = new Rubrique();
        $rubrique->designation = "Cours";
        $rubrique->save();
    }
}
