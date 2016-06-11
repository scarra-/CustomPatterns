<?php

namespace Patters\Creational\AbstractFactory\English;

class GermanDocumentTemplate
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
