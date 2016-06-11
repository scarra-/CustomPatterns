<?php

namespace Patters\Behavioral\Memento;

use Patters\Behavioral\Memento\Interfaces\DocumentSnapshotInterface;

class DocumentStorage
{

    protected $documents = [];

    public function getDocumentByTimestamp($timestamp)
    {
        // logic should be enhanced
        return $this->documents[$timestamp];
    }

    public function storeDocument(DocumentSnapshotInterface $document)
    {
        $this->documents[time()] = $document;
    }

    public function getAvailableDocumentTimestamps()
    {
        return array_keys($this->documents);
    }

    public function getAllHistory()
    {
        return $this->documents;
    }
}
