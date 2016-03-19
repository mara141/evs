<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;

class IndiVotar extends Model
{
     protected $table = 'indivotars';


    protected $fillable = ['respuesta'];
}
