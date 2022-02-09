<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Carbon;

/**
 * Class IpAdress
 * @package App\Models
 *
 * @property int $id
 * @property string $address
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property IpAddress $ipAddress
 * @property IpAddress[] $ipAddresses
 *
 */
class IpAddress extends Model {
  use HasFactory;

  /**
   * @var string
   */
  protected $table = 'ip_addresses';

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'address',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var string[]
   */
  protected $casts = [
    'address' => 'string',
  ];

  /**
   * Get hosts from ipAddress
   *
   * @return Relation
   */
  public function hosts(): Relation {
    return $this->hasMany(Host::class);
  }
}
