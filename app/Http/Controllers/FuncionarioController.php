<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Posto;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listFuncionario(Request $request)
    {
        $arrayFunc = [];
        $data = Posto::where('pais', '=', \json_decode($request->getContent())->local)->with('funcionario')->get();
        if(sizeof($data) == 0)
            return response()->json('Não Há Registros');
            
        foreach ($data as $key => $value) {
            foreach($value->funcionario as $key => $value2){
                array_push($arrayFunc, array('name' => $value2->nome));
            }
        }
        
        return response()->json($arrayFunc);
    }
}
