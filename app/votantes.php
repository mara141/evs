<?php

namespace evs;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class votantes extends Model
{
     protected $table = 'votantes';


    protected $fillable = ['name', 'cedula','email','path'];

     public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local1')->put($name, \File::get($path));
}

}
