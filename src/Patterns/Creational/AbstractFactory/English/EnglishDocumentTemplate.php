<?php

namespace Patters\Creational\AbstractFactory\English;

class EnglishDocumentTemplate
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
