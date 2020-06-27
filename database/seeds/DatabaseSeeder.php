<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 3)->create();
        factory(App\Departament::class, 5)->create();
        factory(App\Commerce::class, 20)->create();
       
        
    }
}
