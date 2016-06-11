<?php

namespace Patters\Creational\AbstractFactory;

class Usage
{
    public function generateDocument(AbstractDocumentFactory $documentFactory)
    {
        return $documentFactory->createDocumentTemplate('Dog’s Bollocks!');
    }
}
