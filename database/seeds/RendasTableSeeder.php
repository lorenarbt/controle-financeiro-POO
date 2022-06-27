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
        DB::table('rendas')->insert(
            [
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 21.5,
                    'ini_date'=> '2022-01-29',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 564.54,
                    'ini_date'=> '2022-01-02',
                    'created_at' =>carbon::now() ,
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 554.8,
                    'ini_date'=> '2022-01-25',
                    'created_at' =>carbon::now() ,
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 231.32,
                    'ini_date'=> '2022-02-14',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 231.32,
                    'ini_date'=> '2022-02-02',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 231.32,
                    'ini_date'=> '2022-02-28',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 231.32,
                    'ini_date'=> '2022-03-28',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 239.32,
                    'ini_date'=> '2022-03-22',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 238.32,
                    'ini_date'=> '2022-03-12',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 300.32,
                    'ini_date'=> '2022-04-01',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 300.32,
                    'ini_date'=> '2022-04-10',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 300.32,
                    'ini_date'=> '2022-04-19',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 200.32,
                    'ini_date'=> '2022-05-01',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 200.32,
                    'ini_date'=> '2022-05-12',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 200.32,
                    'ini_date'=> '2022-05-10',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 100.21,
                    'ini_date'=> '2022-06-04',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                    ],
                    [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 200.32,
                    'ini_date'=> '2022-06-18',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'value'=> 020.32,
                    'ini_date'=> '2022-06-05',
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 600.32,
                //     'ini_date'=> '2022-07-07',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 400.32,
                //     'ini_date'=> '2022-07-12',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                //     ],
                //     [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 230.32,
                //     'ini_date'=> '2022-07-21',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 112.32,
                //     'ini_date'=> '2022-08-09',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 112.32,
                //     'ini_date'=> '2022-08-14',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 112.32,
                //     'ini_date'=> '2022-08-22',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 800.32,
                //     'ini_date'=> '2022-09-22',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 800.32,
                //     'ini_date'=> '2022-09-20',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 800.32,
                //     'ini_date'=> '2022-09-30',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 800.32,
                //     'ini_date'=> '2022-09-22',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 800.32,
                //     'ini_date'=> '2022-10-22',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 810.32,
                //     'ini_date'=> '2022-10-29',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 832.32,
                //     'ini_date'=> '2022-10-01',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 832.32,
                //     'ini_date'=> '2022-10-01',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 111.11,
                //     'ini_date'=> '2022-11-11',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 111.23,
                //     'ini_date'=> '2022-11-23',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 111.19,
                //     'ini_date'=> '2022-11-19',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 212.12,
                //     'ini_date'=> '2022-12-12',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 212.21,
                //     'ini_date'=> '2022-12-21',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'value'=> 212.31,
                //     'ini_date'=> '2022-12-31',
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ]
            ]
        );
    }
}
