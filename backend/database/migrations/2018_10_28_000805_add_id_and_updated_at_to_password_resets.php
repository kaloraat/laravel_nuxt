<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdAndUpdatedAtToPasswordResets extends Migration {
	public function up() {
		Schema::table('password_resets', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamp('updated_at')->nullable();
		});
	}

	public function down() {
		Schema::table('password_resets', function (Blueprint $table) {
			Schema::dropIfExists('password_resets');
		});
	}
}
