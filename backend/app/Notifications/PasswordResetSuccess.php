<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordResetSuccess extends Notification implements ShouldQueue {
	use Queueable;

	public function __construct() {
		//
	}

	public function via($notifiable) {
		return ['mail'];
	}

	// Get the mail representation of the notification.
	public function toMail($notifiable) {
		return (new MailMessage)
			->line('You have changed your password succefully.')
			->line('If you did change password, no further action is required.')
			->line('If you did not change password, protect your account.');
	}

	// Get the array representation of the notification.
	public function toArray($notifiable) {
		return [
			//
		];
	}
}
