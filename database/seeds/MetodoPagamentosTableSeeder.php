<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodoPagamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodo_pagamentos')->insert(
            [
                [
                    'desc' => 'Pix',
                ],
                [
                    'desc' => 'TED',
                ],
                [
                    'desc' => 'DOC',
                ],
                [
                    'desc' => 'Boleto',
                ],
                [
                    'desc' => 'Cartão Débito',
                ],
                [
                    'desc' => 'Cartão Crédito',
                ],

            ]
        );
    }
}
