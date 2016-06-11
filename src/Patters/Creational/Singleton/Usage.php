<?php

namespace Patters\Creational\Singleton;

class Usage
{
    public function testSingleton()
    {
        $connection1 = DatabaseConnection::getConnection();
        time_nanosleep(0, 100000000);
        $connection2 = DatabaseConnection::getConnection();
        var_dump($connection1->getTimestamp());
        var_dump($connection2->getTimestamp());
    }
}
