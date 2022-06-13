<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoContasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_contas')->insert(
            [
                [
                    'desc' => 'poupança',
                ],
                [
                    'desc' => 'corrente',
                ],

            ]
        );
    }
}
