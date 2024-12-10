<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //
    public function getData(Request $request){

        
        $pais=Pais::all();
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'result'=> $pais
        ]);
    }

    public function save(Request $request){

        //instanciamos el objeto

        $pais= Pais:: create([
            "nombre"=>$request->nombre,
        ]);    

/*
        $pais= new Pais();
        $pais->nombre= $request-> nombre;
        $pais->save(); 
*/

        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            
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
