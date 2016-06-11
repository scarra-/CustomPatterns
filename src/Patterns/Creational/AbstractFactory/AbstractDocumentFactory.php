<?php

namespace Patters\Creational\AbstractFactory;

abstract class AbstractDocumentFactory
{
    abstract public function createDocumentTemplate($name);
}
