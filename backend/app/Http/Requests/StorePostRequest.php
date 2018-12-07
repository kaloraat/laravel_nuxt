<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
			'body' => 'required|max:2000',
		];
	}
}
