<?php

namespace Database\Seeders;

use App\Models\IpAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IpAddressSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    IpAddress::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    IpAddress::factory()->count(10)->create();
  }
}
