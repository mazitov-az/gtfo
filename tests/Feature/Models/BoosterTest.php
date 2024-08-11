<?php

declare(strict_types=1);

namespace Models;

use App\Models\Booster;
use Tests\TestCase;

final class BoosterTest extends TestCase
{
    public function test_getDto(): void
    {
        /** @var Booster $createItem */
        $createItem = Booster::factory()->create();
        $data = $createItem->data;
        $dto = $createItem->getDto();
        foreach ($dto as $key => $value) {
            $this->assertEquals($data[$key], $value);
        }
    }
}
