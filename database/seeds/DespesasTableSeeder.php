<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Despesa;

class DespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Despesa::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'fixed'=> 1,
            'ini_date'=> '2022-01-29',
            'end_date'=> null,
            'deadline'=> 23,
            'relevance'=> 1,
            'type'=> 2,
            'value'=> 8,
            ]);
        Despesa::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'fixed'=> 0,
            'ini_date'=> '2022-04-29',
            'end_date'=> null,
            'deadline'=> 24,
            'relevance'=> 2,
            'type'=> 4,
            'value'=> 2,
            ]);
        Despesa::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'fixed'=> 1,
            'ini_date'=> '2022-03-25',
            'end_date'=> null,
            'deadline'=> 3,
            'relevance'=>2,
            'type'=>3,
            'value'=> 8,
            ]);
        Despesa::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'fixed'=> 0,
            'ini_date'=> '2022-04-12',
            'end_date'=> null,
            'deadline'=> 9,
            'relevance'=>1,
            'type'=>1,
            'value'=> 2,
            ]);
    }
}
