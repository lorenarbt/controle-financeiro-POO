<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
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
        $this->call(UsersTableSeeder::class);
        $this->call(PrazosTableSeeder::class);
        $this->call(TipoContasTableSeeder::class);
        $this->call(MetodoPagamentosTableSeeder::class);
        $this->call(RendasTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(RelevanciasTableSeeder::class);
        $this->call(DespesasTableSeeder::class);
    }
}
