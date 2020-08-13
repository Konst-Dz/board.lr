<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(
            ['name' => 'Auto']
        );
        \App\Category::create(
            ['name' => 'Moto']
        );
        \App\Category::create(
            ['name' => 'Computers']
        );
        \App\Category::create(
            ['name' => 'Audio']
        );
    }
}
