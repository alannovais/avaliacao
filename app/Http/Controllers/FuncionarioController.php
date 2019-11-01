<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Posto;

class FuncionarioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listFuncionario($request)
    {
        //here call method to search in DB
        DB::select('
        SELECT * FROM 
            Funcionario f
            INNER JOIN Func_Posto fp on fp.func_id = f.id
            INNER JOINT Posto p on p.id = fp.posto.id
             where posto = ?'
        , $request);

        return response()->json($data);
    }
}
