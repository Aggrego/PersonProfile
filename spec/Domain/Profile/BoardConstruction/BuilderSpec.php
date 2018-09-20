<?php

namespace spec\Aggrego\PersonProfile\Domain\Profile\BoardConstruction;

use Aggrego\Domain\Profile\BoardConstruction\Builder as DomainBuilder;
use Aggrego\PersonProfile\Domain\Profile\BoardConstruction\Builder;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Builder::class);
        $this->shouldBeAnInstanceOf(DomainBuilder::class);
    }
}
