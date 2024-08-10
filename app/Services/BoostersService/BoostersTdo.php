<?php

declare(strict_types=1);

namespace App\Services\BoostersService;

final class BoostersTdo
{
    public function __construct(
        public string $PublicName,
        public string $Description,
        public string $MainEffectType,
        public string $ImplantCategory,
        public array  $Effects,
        public array  $Conditions,
    )
    {
    }
}
