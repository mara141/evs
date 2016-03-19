<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use DB;

class Eleccion extends Model
{
   protected $table = 'eleccions';


    protected $fillable = 
    ['tema', 
    'pregunta',
    'TipoRespuesta',
    'file',
    'alias_id',
    'dateinicio',
     'datefinal',
     'time', 'time1'
     ];

       public function setfileAttribute($path){
        $name = Carbon::now()->second.$path->getClientOriginalName();
        $this->attributes['file'] = $name;
        \Storage::disk('local')->put($name, \File::get($path));
}
     public function setDateInicioAttribute($date){
		$this->attributes['dateinicio'] = Carbon::createFromFormat('Y-m-d H:i:s', $date );   
}
   public function setDateFinalAttribute($date){
		$this->attributes['datefinal'] = Carbon::createFromFormat('Y-m-d H:i:s', $date );   
}



	public static function Eleccions(){
		return DB::table('eleccions')
			->join('insts','insts.id','=','eleccions.alias_id')
			->select('eleccions.*', 'insts.alias','insts.path')
			->get();
	}

}
