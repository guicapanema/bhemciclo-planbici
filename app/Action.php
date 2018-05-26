<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
	protected $casts = [
		'amount_forecast' => 'float',
		'amount_budgeted' => 'float',
		'amount_invested' => 'float',
		'quantity_forecast' => 'float',
		'quantity_real' => 'float' 
	];

	public function axis() {
		return $this->belongsTo(Axis::class);
	}
}
