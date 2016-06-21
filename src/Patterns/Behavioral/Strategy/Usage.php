<?php

namespace Patters\Behavioral\Strategy;

use Patters\Behavioral\Strategy\Strategies\FirstStrategy;
use Patters\Behavioral\Strategy\Strategies\SecondStrategy;

class Usage
{
    public function testStrategy()
    {
        $documentService = new DocumentService();

        $documentService->setStrategy(new FirstStrategy());
        $documentService->processDocuments();

        $documentService->setStrategy(new SecondStrategy());
        $documentService->processDocuments();
    }
}
