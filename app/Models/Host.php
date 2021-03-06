<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Carbon;

/**
 * Class Host
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Host $host
 * @property Host[] $hosts
 *
 */
class Host extends Model {
  use HasFactory;

  /**
   * @var string
   */
  protected $table = 'hosts';

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'name',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var string[]
   */
  protected $casts = [
    'name' => 'string',
  ];

  /**
   * Get ipAddress from host
   *
   * @return Relation
   */
  public function ipAddress(): Relation{
    return $this->belongsTo(IpAddress::class);
  }

  /**
   * Get users from host
   *
   * @return Relation
   */
  public function users(): Relation {
    return $this->belongsToMany(User::class)->withTimestamps();
  }
}
