<?php

namespace Patters\Behavioral\Strategy\Strategies;

use Patters\Behavioral\Strategy\Interfaces\StrategyInterface;

class FirstStrategy implements StrategyInterface
{
    public function processDocuments()
    {
        var_dump("Processing documents using 1. strategy.");
    }
}
