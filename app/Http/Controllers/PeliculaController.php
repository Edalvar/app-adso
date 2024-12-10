<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importamos el modelo
use App\Models\Pelicula;


class PeliculaController extends Controller
{
    //
    public function getData(Request $request){

        $pelicula=Pelicula::all();
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'result'=> $pelicula
        ]);
    }

    public function getDataById(Request $request){

        $pelicula=Pelicula:: where('id',$request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'result'=> $pelicula
        ]);
    }

    public function save(Request $request){

        $pelicula = Pelicula:: create([
            'titulo'=>$request->titulo,
            'genero'=>$request->genero,
            'director'=>$request->director,
            'año'=>$request->año,
            'duracion'=>$request->duracion,
            'sinopsis'=>$request->sinopsis,
            'clasificacion'=>$request->clasificacion,
            'idioma'=>$request->idioma,
            'subtitulos'=>$request->subtitulos,
            'imagen_portada'=>$request->imagen_portada,
            'id_pais'=>$request->id_pais,


        ]); 

        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito pendejo',
            'data'=> $pelicula,
        ]);
    }

    public function update(Request $request){

        //para actualizar necesito la llave primaria
        $pelicula= Pelicula::findOrFail($request->id);

        $pelicula->update([
            'titulo'=>$request->titulo,
            'genero'=>$request->genero,
            'director'=>$request->director,
            'año'=>$request->año,
            'duracion'=>$request->duracion,
            'sinopsis'=>$request->sinopsis,
            'clasificacion'=>$request->clasificacion,
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
         // Encuentra la película por su ID
    $pelicula = Pelicula::find($request->id);

    // Verifica si existe
    if (!$pelicula) {
        return response()->json([
            'status' => '404',
            'message' => 'Pelicula no encontrada',
        ], 404);
    }

    // Elimina la película
    $pelicula->delete();
        


        return response()->json([
            'status'=> '200',
            'message'=> 'se eliminó con exito',
        ]);
    }
    
    

}
