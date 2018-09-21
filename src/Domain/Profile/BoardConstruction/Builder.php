<?php

declare(strict_types = 1);

namespace Aggrego\PersonProfile\Domain\Profile\BoardConstruction;

use Aggrego\Domain\Board\Key;
use Aggrego\Domain\Board\Prototype\Board as BoardPrototype;
use Aggrego\Domain\Profile\BoardConstruction\Builder as DomainBuilder;
use Aggrego\Domain\Profile\BoardConstruction\Exception\UnableToBuildBoardException;
use Aggrego\Domain\Profile\Profile;

abstract class Builder implements DomainBuilder
{
    /** @var Profile */
    private $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

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
