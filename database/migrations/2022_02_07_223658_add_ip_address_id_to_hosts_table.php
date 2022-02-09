<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIpAddressIdToHostsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('hosts', function (Blueprint $table) {
      $table->unsignedBigInteger('ip_address_id')->after('name')->nullable();
      $table->foreign('ip_address_id')->references('id')->on('ip_addresses');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('hosts', function (Blueprint $table) {
      $table->dropForeign('ip_address_id');
      $table->dropColumn('ip_address_id');
    });
  }
}
