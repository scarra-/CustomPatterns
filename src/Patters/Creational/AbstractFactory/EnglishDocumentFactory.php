<?php

namespace Patters\Creational\AbstractFactory;

use Patters\Creational\AbstractFactory\English\EnglishDocumentTemplate;

class EnglishDocumentFactory extends AbstractDocumentFactory
{

    public function createDocumentTemplate($name)
    {
        return new EnglishDocumentTemplate($name);
    }
}
