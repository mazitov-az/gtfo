<?php

declare(strict_types=1);

namespace App\Services\BoostersService;

use Illuminate\Contracts\Support\Arrayable;

final class BoostersTdo implements Arrayable
{
    public function __construct(
        public string $PublicName,
        public string $Description,
        public string $MainEffectType,
        public string $ImplantCategory,
        public array  $Effects = [],
        public array  $Conditions = [],
    )
    {
    }

    public function toArray(): array
    {
        return (array)$this;
    }

    public function export(): string
    {
        return json_encode($this);
    }
}
