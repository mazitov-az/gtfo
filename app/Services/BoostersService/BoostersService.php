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

    /**
     * @return List<BoostersTdo>
     */
    public function getAll(): iterable
    {
        /** @var \Illuminate\Database\Eloquent\Collection<Booster> $items */
        $items = Booster::query()->get();
        if ($items->count() === 0) {
            return [];
        }

        $result = [];
        foreach ($items as $item) {
            $result[] = $item->getDto();
        }

        return $result;
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
