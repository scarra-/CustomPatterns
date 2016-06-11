<?php

namespace Patters\Behavioral\Memento;

use Patters\Behavioral\Memento\Interfaces\DocumentInterface;

class DocumentManager
{
    protected $document;

    public function __construct(DocumentInterface $document)
    {
        $this->document = $document;
    }

    public function getDocumentSnapshot()
    {
        return new DocumentSnapshot($this->document);
    }

    public function setContent($content)
    {
        $this->document->setContent($content);
    }

    public function getContent()
    {
        return $this->document->getContent();
    }
}
