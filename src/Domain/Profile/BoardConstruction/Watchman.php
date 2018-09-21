<?php

declare(strict_types = 1);

namespace Aggrego\PersonProfile\Domain\Profile\BoardConstruction;

use Aggrego\Domain\Profile\BoardConstruction\Builder as DomainBuilder;
use Aggrego\Domain\Profile\BoardConstruction\Watchman as DomainWatchman;
use Aggrego\Domain\Profile\Profile;

class Watchman implements DomainWatchman
{
    public function isSupported(Profile $profile): bool
    {
        // TODO: Implement isSupported() method.
    }

    public function passBuilder(Profile $profile): DomainBuilder
    {
        return new Builder($profile);
    }
}
