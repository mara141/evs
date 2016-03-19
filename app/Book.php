<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     protected $fillable = ['name', 'author','year'];
}
