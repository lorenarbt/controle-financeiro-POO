<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentidoTransferenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sentido_transferencias')->insert(
            [
                [
                    'desc' => 'recebimento',
                ],
                [
                    'desc' => 'pagamento',
                ],
            ]
        );
    }
}
