<?php

namespace Patters\Behavioral\Strategy;

use Patters\Behavioral\Strategy\Interfaces\StrategyInterface;

class DocumentService implements StrategyInterface
{

    protected $strategy;

    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function processDocuments()
    {
        $this->checkStrategy();

        $this->strategy->processDocuments();
    }

    private function checkStrategy()
    {
        if (empty($this->strategy)) {
            throw new \Exception('Strategy is not set!');
        }

        return true;
    }
}
