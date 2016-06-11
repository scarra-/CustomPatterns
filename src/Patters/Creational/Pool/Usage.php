<?php

namespace Patters\Creational\Pool;

class Usage
{
    protected $workersPool;

    public function getWorker()
    {
        $this->workersPool = new WorkersPool();
        $this->workersPool->addWorker(new Worker());

        return $this->workersPool->getWorker();
    }
}
