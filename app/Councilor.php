<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Councilor extends Model
{
	public function supports() {
		return $this->hasMany(CouncilorSupport::class);
	}
}
