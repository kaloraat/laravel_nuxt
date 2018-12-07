<?php

namespace App\Policies;

use App\Topic;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TopicPolicy {
	use HandlesAuthorization;

	public function __construct() {
		//
	}

	public function update(User $user, Topic $topic) {
		return $user->ownsTopic($topic);
	}

	public function destroy(User $user, Topic $topic) {
		return $user->ownsTopic($topic);
	}
}
