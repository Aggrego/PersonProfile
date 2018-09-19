<?php

namespace spec\Aggrego\PersonProfile\Domain\Profile\BoardConstruction;

use Aggrego\PersonProfile\Domain\Profile\BoardConstruction\Watchman;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WatchmanSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Watchman::class);
    }
}
