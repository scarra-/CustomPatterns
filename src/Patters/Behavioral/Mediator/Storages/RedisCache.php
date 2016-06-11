<?php

namespace Patters\Behavioral\Mediator\Storages;

use Patters\Behavioral\Mediator\Interfaces\CacheInterface;

class RedisCache implements CacheInterface
{
    public function writeData($data)
    {
        var_dump($data);
    }
}
