<?php

namespace spec\Aggrego\PersonProfile\Domain\Profile\BoardTransformation;

use Aggrego\Domain\Profile\BoardTransformation\Watchman as DomainWatchman;
use Aggrego\PersonProfile\Domain\Profile\BoardTransformation\Watchman;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WatchmanSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Watchman::class);
        $this->shouldBeAnInstanceOf(DomainWatchman::class);
    }
}
