<?php

namespace Database\Seeders;

use App\Models\Filiere;
use App\Models\Promotion;
use App\Models\Rubrique;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        if (Filiere::count() == 0) {
            $this->call(FiliereSeeder::class);
        }

        if (Promotion::count()==0) {
            $this->call(PromotionSeeder::class);
        }

        if ( Rubrique::count() == 0 ) {
            $this->call(RubriqueSeeder::class);
        }

        if (Role::count() == 0) {
            $this->call(RoleSeeder::class);
        }

        if (Permission::count() == 0) {
            $this->call(PermissionSeeder::class);
        }

    }
}
