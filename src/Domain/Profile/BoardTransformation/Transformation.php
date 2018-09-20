<?php

declare(strict_types = 1);

namespace Aggrego\PersonProfile\Domain\Profile\BoardTransformation;

use Aggrego\Domain\Board\Board;
use Aggrego\Domain\Board\Prototype\Board as BoardPrototype;
use Aggrego\Domain\Profile\BoardTransformation\Exception\UnprocessableBoardException;
use Aggrego\Domain\Profile\BoardTransformation\Transformation as DomainTransformation;

class Transformation implements DomainTransformation
{
    /**
     * @param Board $board
     * @return BoardPrototype
     * @throws UnprocessableBoardException
     */
    public function transform(Board $board): BoardPrototype
    {
        // TODO: Implement transform() method.
    }
}
