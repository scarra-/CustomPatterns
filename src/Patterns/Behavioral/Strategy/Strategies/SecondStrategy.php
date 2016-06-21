<?php

namespace Patters\Behavioral\Strategy\Strategies;

use Patters\Behavioral\Strategy\Interfaces\StrategyInterface;

class SecondStrategy implements StrategyInterface
{
    public function processDocuments()
    {
        var_dump("Processing documents using 2. strategy.");
    }
}
