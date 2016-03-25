<?php

namespace evs;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Inst extends Model
{

    protected $table = 'insts';

    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'alias', 'numero', 'path'];
    public function setPathAttribute($path)
    {
        if ($path != null) {
            $name = Carbon::now()->second . $path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }
}
