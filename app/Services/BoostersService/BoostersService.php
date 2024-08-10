<?php

declare(strict_types=1);

namespace App\Services\BoostersService;

use App\Models\Booster;

final class BoostersService implements BoostersContract
{

    public function add(BoostersTdo $item): BoostersContract
    {
        Booster::query()->create([
            'data' => $item->export()
        ]);
        return $this;
    }

    public function getAll(): iterable
    {
        // TODO: Implement getAll() method.
        return [];
    }

    public function getForUser($uuid): iterable
    {
        // TODO: Implement getForUser() method.
        return [];
    }

    public function export(): string
    {
        // TODO: Implement export() method.
        return '';
    }
}
