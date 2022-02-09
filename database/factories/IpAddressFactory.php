<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IpAddressFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition() {
    return [
      'address' => $this->faker->ipv4()
    ];
  }
}
