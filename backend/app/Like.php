<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {
	public function likeable() {
		return $this->morphTo();
	}

	public function user() {
		return $this->belongsTo(User::class);
	}
}
