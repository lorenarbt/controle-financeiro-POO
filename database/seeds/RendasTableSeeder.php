<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Renda;
use Carbon\Carbon;
use Illuminate\Support\Str;

class RendasTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Renda::create([  //importa a model de renda
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 10121.5,
            'ini_date'=> '2022-01-29',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 12564.54,
            'ini_date'=> '2022-01-02',
            'created_at' =>carbon::now() ,
            'updated_at' =>carbon::now()
        ]);
        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 46554.8,
            'ini_date'=> '2022-01-25',
            'created_at' =>carbon::now() ,
            'updated_at' =>carbon::now()
            ]);
        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1231.32,
             'ini_date'=> '2022-02-14',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1231.32,
             'ini_date'=> '2022-02-02',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1231.32,
            'ini_date'=> '2022-02-28',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);


        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1231.32,
            'ini_date'=> '2022-03-28',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1239.32,
            'ini_date'=> '2022-03-22',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);
        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1238.32,
            'ini_date'=> '2022-03-12',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1300.32,
            'ini_date'=> '2022-04-01',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1300.32,
            'ini_date'=> '2022-04-10',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1300.32,
            'ini_date'=> '2022-04-19',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 3000.32,
            'ini_date'=> '2022-05-01',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 3000.32,
            'ini_date'=> '2022-05-12',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 3000.32,
            'ini_date'=> '2022-05-10',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 5600.21,
            'ini_date'=> '2022-06-04',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 4000.32,
            'ini_date'=> '2022-06-18',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 4020.32,
            'ini_date'=> '2022-06-05',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 2000.32,
            'ini_date'=> '2022-07-07',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);


        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 2000.32,
            'ini_date'=> '2022-07-12',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
            ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 5230.32,
            'ini_date'=> '2022-07-21',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1112.32,
            'ini_date'=> '2022-08-09',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);


        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1112.32,
            'ini_date'=> '2022-08-14',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1112.32,
            'ini_date'=> '2022-08-22',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);



        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 7800.32,
            'ini_date'=> '2022-09-22',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 7800.32,
            'ini_date'=> '2022-09-20',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 7800.32,
            'ini_date'=> '2022-09-30',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 7800.32,
            'ini_date'=> '2022-09-22',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 2800.32,
            'ini_date'=> '2022-10-22',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 2810.32,
            'ini_date'=> '2022-10-29',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 2832.32,
            'ini_date'=> '2022-10-01',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 2832.32,
            'ini_date'=> '2022-10-01',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1111.11,
            'ini_date'=> '2022-11-11',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1111.23,
            'ini_date'=> '2022-11-23',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);


        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1111.19,
            'ini_date'=> '2022-11-19',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1212.12,
            'ini_date'=> '2022-12-12',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1212.21,
            'ini_date'=> '2022-12-21',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);

        Renda::create([
            'user_id'=> 1,
            'desc'=> Str::random(10),
            'value'=> 1212.31,
            'ini_date'=> '2022-12-31',
            'created_at' =>carbon::now(),
            'updated_at' =>carbon::now()
        ]);
    }
}
