<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(
            [
                [
                    'name' => 'Lorena Robeta',
                    'email' => 'lorenaroberta@ufba.br',
                    'password' => bcrypt('123456'),
                    'cpf' => '111.111.111-11',
                    'tel' => '(71) 99999-9999'
                    
                ],
                [
                    'name' => 'Alexandre Coelho',
                    'email' => 'alexandrecbs@ufba.br',
                    'password' => bcrypt('123456'),
                    'cpf' => '222.222.222-22',
                    'tel' => '(71) 99999-9999'

                ],
            ]
        );
    }
}
