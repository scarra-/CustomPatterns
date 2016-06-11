<?php

namespace Patters\Creational\Builder\ReportParts;

class Watermark
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
