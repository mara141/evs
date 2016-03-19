<?php

namespace evs;

use Illuminate\Database\Eloquent\Model;

class ElectionImages extends Model
{
	protected $table = "election_images";
    protected $fillable = ['id', 'images', 'votes', 'election_id', 'is_draft'];
}
