<?php

namespace Patters\Creational\Pool;

use Patters\Creational\Pool\Interfaces\Workable;

class Worker implements Workable
{

    public function __construct()
    {
        // Very time-wasting functions
    }


    public function work()
    {
        echo "Working";
    }
}
