<?php

namespace Patters\Behavioral\Observer\Interfaces;

use Patters\Behavioral\Observer\Interfaces\DocumentInterface;

interface ObserverInterface
{
    public function notify(DocumentInterface $document);
}
