<?php

namespace Patters\Behavioral\Mediator\Storages;

use Patters\Behavioral\Mediator\Interfaces\DatabaseInterface;

class MariaDatabase implements DatabaseInterface
{
    public function writeData($data)
    {
        var_dump($data);
    }
}
