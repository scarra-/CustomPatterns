<?php

namespace Patters\Behavioral\Bridge\Technologies;

use Patters\Behavioral\Bridge\Technologies\Sendable;

class SMSSender implements Sendable
{
    public function send($message)
    {
        echo "SMS device is sending - $message \n";
    }
}
