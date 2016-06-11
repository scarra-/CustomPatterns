<?php

namespace Patters\Behavioral\Mediator;

use Patters\Behavioral\Mediator\Interfaces\CacheInterface;
use Patters\Behavioral\Mediator\Interfaces\DatabaseInterface;
use Patters\Behavioral\Mediator\Interfaces\StorageMediatorInterface;

class StorageMediator implements StorageMediatorInterface
{

    protected $database;

    protected $cache;

    public function __construct(CacheInterface $cache, DatabaseInterface $database)
    {
        $this->cache    = $cache;
        $this->database = $database;
    }

    public function getDatabaseConnection()
    {
        return $this->database;
    }

    public function getCacheConnection()
    {
        return $this->cache;
    }
}
