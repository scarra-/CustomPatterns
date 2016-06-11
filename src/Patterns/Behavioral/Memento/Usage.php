<?php

namespace Patters\Behavioral\Memento;

class Usage
{
    public function testMemento()
    {
        $documentStorage = new DocumentStorage();
        $documentManager = new DocumentManager(new Document("Document1", "Data1"));
        $documentStorage->storeDocument($documentManager->getDocumentSnapshot());

        sleep(1);

        $documentManager->setContent("Content");
        $documentStorage->storeDocument($documentManager->getDocumentSnapshot());

        return $documentStorage->getAllHistory();
    }
}
