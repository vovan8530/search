<?php

namespace App\Jobs;

use App\Events\SearchProcessedEvent;
use App\Models\Host;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class SearchIpAddress implements ShouldQueue {
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * @var
   */
  protected $name;

  /**
   * Create a new job instance.
   *
   * @return void
   */
  public function __construct($name) {
    $this->name = $name;
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle() {
    $host = Host::query()->where('name', $this->name)->firstOrFail()->load('ipAddress');
    event(new SearchProcessedEvent($host));
  }
}
