<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Axis extends Model
{
	public function actions() {
		return $this->hasMany(Action::class);
	}
}
