<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;

class Indivotan extends Model
{
    protected $table = 'indivotans';


    protected $fillable = ['name','email'];
}
