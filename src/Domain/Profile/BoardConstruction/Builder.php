<?php

declare(strict_types = 1);

namespace Aggrego\PersonProfile\Domain\Profile\BoardConstruction;

use Aggrego\Domain\Board\Key;
use Aggrego\Domain\Board\Prototype\Board as BoardPrototype;
use Aggrego\Domain\Profile\BoardConstruction\Builder as DomainBuilder;
use Aggrego\Domain\Profile\BoardConstruction\Exception\UnableToBuildBoardException;

class Builder implements DomainBuilder
{
    /**
     * @param Key $key
     * @return BoardPrototype
     * @throws UnableToBuildBoardException
     */
    public function build(Key $key): BoardPrototype
    {
        // TODO: Implement build() method.
    }
}
