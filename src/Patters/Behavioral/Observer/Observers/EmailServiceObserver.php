<?php

namespace Patters\Behavioral\Observer;

use Patters\Behavioral\Observer\Interfaces\ObserverInterface;
use Patters\Behavioral\Observer\Interfaces\DocumentInterface;

class EmailServiceObserver implements ObserverInterface
{
    public function notify(DocumentInterface $document)
    {
        var_dump('EmailServiceObserver: sending notification email, document status: '. $document->getStatus());
    }
}
