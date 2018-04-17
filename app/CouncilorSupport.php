<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouncilorSupport extends Model
{
	public function councilor() {
		return $this->belongsTo(Councilor::class);
	}
}
