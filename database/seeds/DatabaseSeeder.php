<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosTableSeeder::class);
        $this->call(PrazosTableSeeder::class);
        $this->call(TipoContasTableSeeder::class);
        $this->call(MetodoPagamentosTableSeeder::class);

        DB::table('rendas')->insert([
            'user_id'=> 2,
            'desc'=> Str::random(10),
            'value'=> 100.35
    
    
        ]);
    }
}
