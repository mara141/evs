<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
    protected $table = 'votos';


    protected $fillable = ['respuesta', 'name_id'];

	public static function Vots(){
		return DB::table('votos')
			->join('votantes','votantes.id','=','votos.name_id')
			->select('votos.*', 'votantes.name')
			->get();
	}
}
