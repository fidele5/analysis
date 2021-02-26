<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion = new Promotion();
        $promotion->designation = "G3";
        $promotion->annee = "2019-2020";
        $promotion->filiere_id = 1;
        $promotion->save();
    }
}
