<?php

namespace Patters\Behavioral\Mediator;

class Usage extends MediatorHolder
{
    public function testMediator()
    {
        $this->getStorageMediator()->getDatabaseConnection()->writeData("Writing to database");
        $this->getStorageMediator()->getCacheConnection()->writeData("Writing to cache");
    }
}
