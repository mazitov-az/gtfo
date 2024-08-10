<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * TODO add foreign user + UUID
 *
 * @property int $id
 * @property int $user_id
 * @property string $data
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Booster extends Model
{
    use HasFactory;

    protected $fillable = ['data'];
}
