<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable= ['titulo','genero','director','año','duracion','sinopsis','clasificacion','idioma','subtitulos','imagen_portada','id_pais'];


}
