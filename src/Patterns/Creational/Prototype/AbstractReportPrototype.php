<?php

namespace Patters\Creational\Prototype;

abstract class AbstractReportPrototype
{
    protected $content;

    protected $name;

    protected $type;

    abstract public function __clone();

    public function setName()
    {
    }

    public function setContent()
    {
    }
}
