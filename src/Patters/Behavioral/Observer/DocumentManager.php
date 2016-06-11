<?php

namespace Patters\Behavioral\Observer;

use Patters\Behavioral\Observer\Interfaces\DocumentInterface;
use Patters\Behavioral\Observer\Interfaces\ObserverInterface;

class DocumentManager
{
    protected $document;

    protected $listeners = [];

    public function __construct(DocumentInterface $document)
    {
        $this->document = $document;
    }

    public function attachListener(ObserverInterface $listener)
    {
        $this->listeners[] = $listener;
    }

    private function notifyListeners()
    {
        foreach ($this->listeners as $listener) {
            $listener->notify($this->document);
        }
    }

    public function updateDocumentStatus($status)
    {
        $this->document->setStatus($status);
        $this->notifyListeners();
    }
}
