<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(
            [
                [
                    'desc' => 'alimentação',
                ],
                [
                    'desc' => 'transporte',
                ],
                [
                    'desc' => 'lazer',
                ],
                [
                    'desc' => 'educação',
                ],
                [
                    'desc' => 'saude',
                ],
            ]
        );
    }
}
