<?php

declare(strict_types=1);

namespace App\Services\BoostersService;

final class CustomBoosters
{
    public bool $UseCustomData = false;

    public function __construct(public array $CustomBoosters = [])
    {
    }
}
