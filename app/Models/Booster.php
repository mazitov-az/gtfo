<?php

declare(strict_types=1);

namespace App\Models;

use App\Services\BoostersService\BoostersTdo;
use Database\Factories\BoosterFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * TODO add foreign user + UUID
 *
 * @property int $id
 * @property int $user_id
 * @property array $data
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Booster extends Model
{
    /** @use HasFactory<BoosterFactory> */
    use HasFactory;

    protected $fillable = ['data'];

    protected $casts = [
        'data' => 'array',
    ];

    public function getDto(): BoostersTdo
    {
        return new BoostersTdo(
            $this->data['PublicName'] ?? '',
            $this->data['Description'] ?? '',
            $this->data['MainEffectType'] ?? '',
            $this->data['ImplantCategory'] ?? '',
            $this->data['Effects'] ?? [],
            $this->data['Conditions'] ?? [],
        );
    }
}
