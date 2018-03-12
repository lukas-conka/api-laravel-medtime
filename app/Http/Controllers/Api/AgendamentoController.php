<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Agendamento;

use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function store(Request $request){
        return Agendamento::create($request->all());
    }

    public function show($id){
        return Agendamento::where('idcliente', $id)->get();
    }

    public function delete($id){
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();

        return 204;
    }

   
}
