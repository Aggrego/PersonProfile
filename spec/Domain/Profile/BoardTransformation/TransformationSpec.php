<?php

namespace spec\Aggrego\PersonProfile\Domain\Profile\BoardTransformation;

use Aggrego\PersonProfile\Domain\Profile\BoardTransformation\Transformation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TransformationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Transformation::class);
    }
}
