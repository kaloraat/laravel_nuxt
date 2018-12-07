<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject {
	use Notifiable;
	protected $fillable = [
		'name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	public function ownsTopic(Topic $topic) {
		return $this->id === $topic->user->id;
	}

	public function ownsPost(Post $post) {
		return $this->id === $post->user->id;
	}

	public function hasLikedPost(Post $post) {
		return $post->likes->where('user_id', $this->id)->count() === 1;
	}

	public function getJWTIdentifier() {
		// return the primary key of the user - user id
		return $this->getKey();
	}

	public function getJWTCustomClaims() {
		// return a key value array, containing any custom claims to be added to JWT
		return [];
	}
}
