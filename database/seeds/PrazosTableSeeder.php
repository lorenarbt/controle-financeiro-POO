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
                [
                    'desc' => 'parcelado 13x',
                ],
                [
                    'desc' => 'parcelado 14x',
                ],
                [
                    'desc' => 'parcelado 15x',
                ],
                [
                    'desc' => 'parcelado 16x',
                ],
                [
                    'desc' => 'parcelado 17x',
                ],
                [
                    'desc' => 'parcelado 18x',
                ],
                [
                    'desc' => 'parcelado 19x',
                ],
                [
                    'desc' => 'parcelado 20x',
                ],
                [
                    'desc' => 'parcelado 21x',
                ],
                [
                    'desc' => 'parcelado 22x',
                ],
                [
                    'desc' => 'parcelado 23x',
                ],
                [
                    'desc' => 'parcelado 24x',
                ],
            ]
        );
    }
}
