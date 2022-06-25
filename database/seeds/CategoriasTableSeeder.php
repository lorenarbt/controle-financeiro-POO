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
                    'user_id' => '1',
                    'desc' => 'alimentação',
                ],
                [
                    'user_id' => '1',
                    'desc' => 'transporte',
                ],
                [
                    'user_id' => '1',
                    'desc' => 'lazer',
                ],
                [
                    'user_id' => '1',
                    'desc' => 'educação',
                ],
                [
                    'user_id' => '2',
                    'desc' => 'alimentação',
                ],
                [
                    'user_id' => '2',
                    'desc' => 'transporte',
                ],
                [
                    'user_id' => '2',
                    'desc' => 'lazer',
                ],
                [
                    'user_id' => '2',
                    'desc' => 'educação',
                ],

            ]
        );
    }
}
