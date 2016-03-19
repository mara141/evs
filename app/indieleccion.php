<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;

class indieleccion extends Model
{
    protected $table = 'indieleccions';


    protected $fillable = ['tema', 'pregunta','TipoRespuesta','path','alias_id', 'dateinicio','datefinal','time'];
}
