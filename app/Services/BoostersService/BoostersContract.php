<?php

declare(strict_types=1);

namespace App\Services\BoostersService;

interface BoostersContract
{
    /**
     * @param BoostersTdo $item
     * @return self
     */
    public function add(BoostersTdo $item): self;

    /**
     * @return List<BoostersTdo>
     */
    public function getAll(): iterable;

    /**
     * @return List<BoostersTdo>
     */
    public function getForUser($uuid): iterable;

    /**
     * JSON
     *
     * @return string
     */
    public function export(): string;
}
