<?php

namespace Patters\Behavioral\Memento;

use Patters\Behavioral\Memento\Interfaces\DocumentSnapshotInterface;

class DocumentSnapshot implements DocumentSnapshotInterface
{

    protected $document;

    public function __construct($document)
    {
        $this->document = $document;
    }

    public function getDocument()
    {
        return $this->document;
    }
}
