<?php

declare(strict_types=1);

namespace Services\BoostersService;

use App\Models\Booster;
use App\Services\BoostersService\BoostersContract;
use App\Services\BoostersService\BoostersService;
use App\Services\BoostersService\BoostersTdo;
use Database\Factories\BoosterFactory;
use Tests\TestCase;

final class BoostersServiceTest extends TestCase
{
    protected BoostersContract $service;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        Booster::query()->delete();
        $this->service = new BoostersService();
    }

    public function test_add(): void
    {
        $item = new BoostersTdo(
            'unit test',
            'unit test',
            'unit test',
            'unit test',
        );
        $this->service->add($item);
        $total = Booster::query()->count();
        $this->assertEquals(1, $total);
        Booster::query()->delete();
    }

    public function test_getAll(): void
    {
        $all = $this->service->getAll();
        $this->assertCount(0, $all);

        /** @var Booster $createItem */
        $createItem = Booster::factory()->create();
        $data = $createItem->data;

        $all = $this->service->getAll();
        $this->assertCount(1, $all);
        $item = reset($all);
        $this->assertEquals($data, $item->toArray());
        Booster::query()->delete();
    }
}
