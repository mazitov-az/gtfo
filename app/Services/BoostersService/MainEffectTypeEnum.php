<?php

declare(strict_types=1);

namespace App\Services\BoostersService;

enum MainEffectTypeEnum: string
{
    case Health = 'Health';

    case Damage = 'Damage';

    case Tool = 'Tool';

    case ProcessingSpeed = 'ProcessingSpeed';

    case InitialState = 'InitialState';
}
