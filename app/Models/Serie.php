<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable= ['titulo','genero','director','año_inicio','sinopsis','temporadas','episodios','idioma','subtitulos','imagen_portada','id_pais'];
}
