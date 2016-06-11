<?php

namespace Patters\Behavioral\Mediator\Interfaces;

interface StorageMediatorInterface
{
    public function getDatabaseConnection();

    public function getCacheConnection();
}
