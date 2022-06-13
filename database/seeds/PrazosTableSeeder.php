<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrazosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prazos')->insert(
            [
                [
                    'desc' => 'á vista',
                ],
                [
                    'desc' => 'parcelado 2x',
                ],
                [
                    'desc' => 'parcelado 3x',
                ],
                [
                    'desc' => 'parcelado 4x',
                ],
                [
                    'desc' => 'parcelado 5x',
                ],
                [
                    'desc' => 'parcelado 6x',
                ],
                [
                    'desc' => 'parcelado 7x',
                ],
                [
                    'desc' => 'parcelado 8x',
                ],
                [
                    'desc' => 'parcelado 9x',
                ],
                [
                    'desc' => 'parcelado 10x',
                ],
                [
                    'desc' => 'parcelado 11x',
                ],
                [
                    'desc' => 'parcelado 12x',
                ],

            ]
        );
    }
}
