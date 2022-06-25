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
    public function run()
    {
        // $renda = factory(App\Renda::class, 5)->make();

        Renda::create([  //importa a model de renda
            'user_id' => 1,
            'desc' => Str::random(10),
            'value' => 10121.5,
            'ini_date' => '2022-01-29'
        ]);
        Renda::create([
            'user_id' => 1,
            'desc' => Str::random(10),
            'value' => 12564.54,
            'ini_date' => '2022-02-02',
        ]);
        Renda::create([
            'user_id' => 1,
            'desc' => Str::random(10),
            'value' => 46554.8,
            'ini_date' => '2022-03-25',
        ]);
        Renda::create([
            'user_id' => 1,
            'desc' => Str::random(10),
            'value' => 1231.32,
            'ini_date' => '2022-04-12',
        ]);
    }
}
