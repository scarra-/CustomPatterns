<?php

namespace Patters\Creational\AbstractFactory;

use Patters\Creational\AbstractFactory\German\GermanDocumentTemplate;

class GermanDocumentFactory extends AbstractDocumentFactory
{

    public function createDocumentTemplate($name)
    {
        return new GermanDocumentTemplate($name);
    }
}
