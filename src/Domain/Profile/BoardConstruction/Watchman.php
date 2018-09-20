<?php

declare(strict_types = 1);

namespace Aggrego\PersonProfile\Domain\Profile\BoardConstruction;

use Aggrego\Domain\Profile\BoardConstruction\Builder;
use Aggrego\Domain\Profile\BoardConstruction\Watchman as DomainWatchman;
use Aggrego\Domain\Profile\Profile;

class Watchman implements DomainWatchman
{
    public function isSupported(Profile $profile): bool
    {
        // TODO: Implement isSupported() method.
    }

    public function passBuilder(Profile $profile): Builder
    {
        // TODO: Implement passBuilder() method.
    }
}
