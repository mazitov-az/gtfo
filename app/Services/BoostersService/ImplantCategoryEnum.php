<?php

declare(strict_types=1);

namespace App\Services\BoostersService;

enum ImplantCategoryEnum: string
{
    case Muted = 'Muted';

    case Bold = 'Bold';

    case Aggressive = 'Aggressive';
}
