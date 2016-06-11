<?php

namespace Patters\Creational\Pool;

use Patters\Creational\Pool\Interfaces\Workable;

class WorkersPool
{
    protected $workers = [];

    public function getWorker()
    {
        return (count($this->workers) > 0) ? array_pop($this->workers) : new Worker();
    }

    public function addWorker(Workable $worker)
    {
        $this->workers[] = $worker;
    }
}
