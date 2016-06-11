<?php

namespace Patters\Behavioral\Mediator;

use Patters\Behavioral\Mediator\Interfaces\StorageMediatorInterface;

abstract class MediatorHolder
{
    protected $storageMediator;

    public function __construct(StorageMediatorInterface $storageMediator)
    {
        $this->storageMediator = $storageMediator;
    }

    public function getStorageMediator()
    {
        return $this->storageMediator;
    }
}
