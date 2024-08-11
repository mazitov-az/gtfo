<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booster>
 */
class BoosterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'data' => [
                'PublicName' => 'test',
                'Description' => '',
                'MainEffectType' => 'Health',
                'ImplantCategory' => 'Muted',
                'Effects' => [],
                'Conditions' => [],
            ]
        ];
    }
}
