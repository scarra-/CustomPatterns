<?php

namespace Patters\Behavioral\Observer;

use Patters\Behavioral\Observer\Interfaces\ObserverInterface;
use Patters\Behavioral\Observer\Interfaces\DocumentInterface;

class DatabseObserver implements ObserverInterface
{
    public function notify(DocumentInterface $document)
    {
        var_dump('DatabseObserver: saving document, status: ' . $document->getStatus());
    }
}
