<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When create :arg1 profile without key
     */
    public function callingBuilderProfileWithoutKey($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then should exist :arg1 fragmented data board
     */
    public function createFragmentedDataBoard($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then it should have :arg1 piece
     */
    public function itShouldHavePiece($arg1)
    {
        throw new PendingException();
    }

}
