<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelevanciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relevancias')->insert(
            [
                [
                    'desc' => 'supérfluo',
                ],
                [
                    'desc' => 'essencial',
                ],

            ]
        );
    }
}
