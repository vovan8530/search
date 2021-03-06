<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostUserTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('host_user', function (Blueprint $table) {
      $table->id();

      $table->unsignedBigInteger('user_id')->nullable();
      $table->foreign('user_id')->references('id')->on('users');

      $table->unsignedBigInteger('host_id')->nullable();
      $table->foreign('host_id')->references('id')->on('hosts');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('host_user');
  }
}
