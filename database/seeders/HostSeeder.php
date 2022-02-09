<?php

namespace Database\Seeders;

use App\Models\Host;
use App\Models\IpAddress;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HostSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    Host::query()->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    IpAddress::query()->each(function ($ipAddress) {
      $hosts = Host::factory()->count(5)->create();
      $ipAddress->hosts()->saveMany($hosts);
    });

    User::query()
      ->each(function ($users) {
        $hosts = Host::all()->random(5);
        $users->hosts()->sync($hosts);
      });
  }
}
