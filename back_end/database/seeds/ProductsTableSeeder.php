<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')
            ->table('products')
            ->insert([
                'name' => 'Joystick PS4',
                'description' => 'Controle para o video-game PS4',
                'value' => 299.00
            ]);

        app('db')
            ->table('products')
            ->insert([
                'name' => 'Teclado Strafe',
                'description' => 'Teclado mecânico á prova d\'água',
                'value' => 999.99
            ]);
    }
}
