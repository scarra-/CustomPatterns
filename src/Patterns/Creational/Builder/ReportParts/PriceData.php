<?php

namespace Patters\Creational\Builder\ReportParts;

class PriceData
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
