<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
    //
    public function getData(Request $request){

        $serie= Serie::all();
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'result'=> $serie
        ]);
    }

    public function getDataById(Request $request){

        $serie=Serie:: where('id',$request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'result'=> $serie
        ]);
    }

    public function save(Request $request){

        $serie = Serie:: create([
            'titulo'=>$request->titulo,
            'genero'=>$request->genero,
            'director'=>$request->director,
            'año_inicio'=>$request->año_inicio,
            'sinopsis'=>$request->sinopsis,
            'temporadas'=>$request->temporadas,
            'episodios'=>$request->episodios,
            'idioma'=>$request->idioma,
            'subtitulos'=>$request->subtitulos,
            'imagen_portada'=>$request->imagen_portada,
            'id_pais'=>$request->id_pais,


        ]); 

        return response()->json([
            
            'status'=> '200',
            'message'=> 'guardado con exito',
            'data'=> $serie,

        ]);
    }

    public function update(Request $request){
       //para actualizar necesito la llave primaria
       $serie= Serie::findOrFail($request->id);

       $serie->update([
           'titulo'=>$request->titulo,
            'genero'=>$request->genero,
            'director'=>$request->director,
            'año_inicio'=>$request->año_inicio,
            'sinopsis'=>$request->sinopsis,
            'temporadas'=>$request->temporadas,
            'episodios'=>$request->episodios,
            'idioma'=>$request->idioma,
            'subtitulos'=>$request->subtitulos,
            'imagen_portada'=>$request->imagen_portada,
            'id_pais'=>$request->id_pais,
       ]);
       return response()->json([
           'status' => '200',
           'message' => 'actualizado con exito',
       ]);
   }

    public function delete(Request $request){
         // Encuentra la serie por su ID
    $serie = Serie::find($request->id);

    // Verifica si existe
    if (!$serie) {
        return response()->json([
            'status' => '404',
            'message' => 'Serie no encontrada',
        ], 404);
    }

    // Elimina la serie
    $serie->delete();
        


        return response()->json([
            'status'=> '200',
            'message'=> 'se eliminó con exito',
        ]);
    }
    
}
