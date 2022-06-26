<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Banco;

class BancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Banco::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'balance'=> 15,
            'type'=> 1
        ]);
        Banco::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'balance'=> 19,
            'type'=> 2,
        ]);
        Banco::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'balance'=> 22,
            'type'=> 1,
        ]);
        Banco::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'balance'=> 20,
            'type'=> 2
        ]);
    }
}
