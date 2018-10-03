<?php

use Illuminate\Database\Seeder;

class LivrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
        	'titulo' => 'Laravel para Ninjas',
        	'autor' => 'Ademir Gabardo',
        	'preco' => '52.00',
        ]);
    }
}
