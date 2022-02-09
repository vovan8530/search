<?php

namespace App\Listeners;

use App\Events\SearchProcessedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SearchListener {
  /**
   * Create the event listener.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  /**
   * Handle the event.
   *
   * @param \App\Events\SearchProcessedEvent $event
   * @return void
   */
  public function handle(SearchProcessedEvent $event) {
    //
  }
}
