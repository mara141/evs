<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Inst extends Model { 
	

     protected $table = 'insts';

     protected $dates = ['deleted_at'];


    protected $fillable = ['name', 'alias','numero','path'];
     public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
}
}