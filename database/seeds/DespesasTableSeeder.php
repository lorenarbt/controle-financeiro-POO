<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Despesa;
use Carbon\Carbon;

class DespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('despesas')->insert(
            [
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 1,
                    'ini_date'=> '2022-01-29',
                    'deadline'=> 23,
                    'relevance'=> 1,
                    'type'=> 2,
                    'value'=> 58,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-01-01',
                    'deadline'=> 24,
                    'relevance'=> 2,
                    'type'=> 4,
                    'value'=> 51,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 1,
                    'ini_date'=> '2022-01-03',
                    'deadline'=> 3,
                    'relevance'=>2,
                    'type'=>3,
                    'value'=> 35,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-02-02',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>3,
                    'value'=> 21,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-02-05',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>1,
                    'value'=> 87,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-02-08',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>1,
                    'value'=> 45,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-03-13',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>5,
                    'value'=> 54,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-03-23',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>5,
                    'value'=>66,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-03-10',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>4,
                    'value'=> 65,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-04-14',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>4,
                    'value'=> 63,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-04-24',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>4,
                    'value'=> 58,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-04-19',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>3,
                    'value'=> 44,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-05-19',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>2,
                    'value'=> 14,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-05-19',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>2,
                    'value'=> 56,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-05-19',
                    // 'end_date'=>' 2022-06-21',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>5,
                    'value'=> 00,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-06-19',
                    // 'end_date'=>' 2022-07-21',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>2,
                    'value'=> 52,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-06-21',
                    // 'end_date'=>' 2022-07-21',
                    'deadline'=> 9,
                    'relevance'=>1,
                    'type'=>4,
                    'value'=> 54,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                [
                    'user_id'=> 1,
                    'desc'=> Str::random(10),
                    'fixed'=> 0,
                    'ini_date'=> '2022-06-12',
                    // 'end_date'=>' 2022-07-21',
                    'deadline'=> 9,
                    'relevance'=>2,
                    'type'=>1,
                    'value'=> 45,
                    'created_at' =>carbon::now(),
                    'updated_at' =>carbon::now()
                ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-07-12',
                //     // 'end_date'=>' 2022-08-21',
                //     'deadline'=> 9,
                //     'relevance'=>2,
                //     'type'=>3,
                //     'value'=> 44,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-07-21',
                //     // 'end_date'=>' 2022-08-26',
                //     'deadline'=> 9,
                //     'relevance'=>2,
                //     'type'=>5,
                //     'value'=> 52,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-07-31',
                //     // 'end_date'=>' 2022-08-31',
                //     'deadline'=> 9,
                //     'relevance'=>2,
                //     'type'=>5,
                //     'value'=> 25,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-08-21',
                //     // 'end_date'=>' 2022-09-21',
                //     'deadline'=> 9,
                //     'relevance'=>2,
                //     'type'=>1,
                //     'value'=> 32,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-08-26',
                //     // 'end_date'=>' 2022-09-29',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>1,
                //     'value'=> 32,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],
                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-08-13',
                //     // 'end_date'=>' 2022-09-12',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>3,
                //     'value'=> 42,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-09-13',
                //     // 'end_date'=>' 2022-10-12',
                //     'deadline'=> 9,
                //     'relevance'=>2,
                //     'type'=>2,
                //     'value'=> 21,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],


                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-09-21',
                //     // 'end_date'=>' 2022-10-22',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>2,
                //     'value'=> 43,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-09-30',
                //     // 'end_date'=>' 2022-10-29',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>1,
                //     'value'=> 54,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-10-21',
                //     // 'end_date'=>' 2022-11-22',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>3,
                //     'value'=> 45,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-10-12',
                //     // 'end_date'=>' 2022-11-14',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>5,
                //     'value'=> 47,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-10-14',
                //     // 'end_date'=>' 2022-11-15',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>1,
                //     'value'=> 47,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],


                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-11-21',
                //     // 'end_date'=>' 2022-12-22',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>2,
                //     'value'=> 47,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-11-11',
                //     // 'end_date'=>' 2022-12-12',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>4,
                //     'value'=> 57,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-11-22',
                //     // 'end_date'=>' 2022-12-16',
                //     'deadline'=> 9,
                //     'relevance'=>2,
                //     'type'=>5,
                //     'value'=> 5,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-12-11',
                //     // 'end_date'=>' 2023-01-11',
                //     'deadline'=> 9,
                //     'relevance'=>2,
                //     'type'=>3,
                //     'value'=> 9,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],


                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-12-31',
                //     // 'end_date'=>' 2023-01-30',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>5,
                //     'value'=> 5,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ],

                // [
                //     'user_id'=> 1,
                //     'desc'=> Str::random(10),
                //     'fixed'=> 0,
                //     'ini_date'=> '2022-12-25',
                //     'deadline'=> 9,
                //     'relevance'=>1,
                //     'type'=>1,
                //     'value'=> 65,
                //     'created_at' =>carbon::now(),
                //     'updated_at' =>carbon::now()
                // ]
            ]
        );
    }

}
