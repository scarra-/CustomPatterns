<?php

namespace Patters\Creational\Builder\ReportParts;

class MaterialType
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
