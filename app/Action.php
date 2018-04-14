<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
	public function axis() {
		return $this->belongsTo(Axis::class);
	}
}
