<?php

use Illuminate\Database\Seeder;
use App\Agendamento;

class AgendamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

         Agendamento::create([
            'estado'=>'SP',
            'especialidade'=>'Ortopedia',
            'unidade'=>'Santa Cruz',
            'data' => '2018-02-01',
            'horario' => '2018-03-03 18:58:32'
        ]);
    }
}
