<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Transferencia;

class TransferenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 1245,
            'bank_id'=> 1,
            'date'=>'2022-05-13',
            'method'=> 2
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 1,
            'value'=> 1237,
            'bank_id'=> 2,
            'date'=>'2022-07-31',
            'method'=> 3
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 1,
            'value'=> 1327,
            'bank_id'=> 4,
            'date'=>'2022-05-13',
            'method'=> 4
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 1415,
            'bank_id'=> 3,
            'date'=>'2022-01-12',
            'method'=> 2
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 7894,
            'bank_id'=> 4,
            'date'=>'2022-02-19',
            'method'=> 1
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 1,
            'value'=> 8390,
            'bank_id'=> 1,
            'date'=>'2022-07-21',
            'method'=> 3
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 1,
            'value'=> 3361,
            'bank_id'=> 1,
            'date'=>'2022-12-31',
            'method'=> 1
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 8740,
            'bank_id'=> 2,
            'date'=>'2022-12-12',
            'method'=> 3
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 7787,
            'bank_id'=> 1,
            'date'=>'2022-01-31',
            'method'=> 1
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 7787,
            'bank_id'=> 4,
            'date'=>'2022-07-31',
            'method'=> 4
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 7787,
            'bank_id'=> 2,
            'date'=>'2022-08-09',
            'method'=> 3
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 2,
            'value'=> 7787,
            'bank_id'=> 2,
            'date'=>'2022-11-10',
            'method'=> 2
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 1,
            'value'=> 7787,
            'bank_id'=> 2,
            'date'=>'2022-12-11',
            'method'=> 2
        ]);

        Transferencia::create([
            'user_id'=> 1,
            'desc'=>Str::random(10),
            'way'=> 1,
            'value'=> 7787,
            'bank_id'=> 4,
            'date'=>'2022-04-03',
            'method'=> 1
        ]);
    }

}
