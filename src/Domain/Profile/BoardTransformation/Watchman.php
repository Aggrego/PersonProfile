<?php

declare(strict_types = 1);

namespace Aggrego\PersonProfile\Domain\Profile\BoardTransformation;

use Aggrego\Domain\Profile\BoardTransformation\Transformation;
use Aggrego\Domain\Profile\BoardTransformation\Watchman as DomainWatchman;
use Aggrego\Domain\Profile\Profile;

class Watchman implements DomainWatchman
{
    public function isSupported(Profile $profile): bool
    {
        // TODO: Implement isSupported() method.
    }

    public function passTransformation(Profile $profile): Transformation
    {

    }
}
