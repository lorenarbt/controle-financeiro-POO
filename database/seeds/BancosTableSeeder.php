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
            'desc'=> 'Caixa',
            'balance'=> 15,
            'type'=> 1
        ]);
        Banco::create([
            'user_id'=> 1,
            'desc'=> 'Banco do Brasil',
            'balance'=> 19,
            'type'=> 2,
        ]);
        Banco::create([
            'user_id'=> 1,
            'desc'=> 'Santander',
            'balance'=> 22,
            'type'=> 1,
        ]);
        Banco::create([
            'user_id'=> 1,
            'desc'=> 'Bradesco',
            'balance'=> 20,
            'type'=> 2
        ]);
    }
}
