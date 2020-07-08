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
        // factory(App\Category::class, 3)->create();
        factory(App\Departament::class, 10)->create();
        // factory(App\Commerce::class, 10000)->create();
       
    

        factory(App\Category::class, 5)->create()->each(function ($category) {

            $category->departaments()->attach($this->array(rand(1,10)));

        });

        factory(App\Commerce::class, 10)->create();

    }

    public function array($max)
    {
        $values = [];

        for ($i=1; $i < $max; $i++) { 
            $values[] = $i;
        }

        return $values;
    }


}
