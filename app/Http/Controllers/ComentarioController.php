<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //
    public function getData(Request $request){

        $rta= 10+20;
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'result'=> $rta
        ]);
    }

    public function save(Request $request){
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $request->titulo,
        ]);
    }

    public function update(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }

    public function delete(Request $request){
        return response()->json([
            'status'=> '200',
            'message'=> 'se eliminó con exito',
        ]);
    }
}
