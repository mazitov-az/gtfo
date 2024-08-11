<?php

declare(strict_types=1);

namespace Http\Controllers;

use Tests\TestCase;

final class BoostersControllerTest extends TestCase
{
    public function test_export(): void
    {
        $response = $this->get('/api/boosters');

        $response->assertStatus(200);
        $response->assertJsonIsObject();
    }
}
