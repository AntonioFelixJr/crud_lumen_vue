<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')
            ->table('categories')
            ->insert([
                'name' => 'Video-game'
            ]);

        app('db')
            ->table('categories')
            ->insert([
                'name' => 'Computador'
            ]);
    }
}
