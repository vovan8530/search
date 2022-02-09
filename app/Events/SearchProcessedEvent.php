<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SearchProcessedEvent implements ShouldBroadcast {
  use Dispatchable, InteractsWithSockets, SerializesModels;

  /**
   * The time (seconds) before the job should be processed.
   *
   * @var int
   */
  public $delay = 30;

  /**
   * The number of times the queued listener may be attempted.
   *
   * @var int
   */
  public $tries = 5;

  /**
   * @var User
   */
  public User $user;

  /**
   * @var string
   */
  public string $ipAddress;

  /**
   * @param string $ipAddress
   * @param User $user
   */
  public function __construct(string $ipAddress, User $user) {
    $this->ipAddress = $ipAddress;
    $this->user = $user;
  }

  /**
   * Get the channels the event should broadcast on.
   *
   * @return \Illuminate\Broadcasting\Channel|array
   */
  public function broadcastOn() {
//    return new PrivateChannel('user.' . $this->user->id);
    return ['my-channel'];
  }

  /**
   * Get the data to broadcast.
   *
   * @return array
   */
  public function broadcastWith() {
    return ['IP Address' => $this->ipAddress];
  }

  /**
   * @return string
   */
  public function broadcastAs() {
    return 'my-event';
  }
}
