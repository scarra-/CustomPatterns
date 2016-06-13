<?php

namespace Patters\Behavioral\Bridge\Technologies;

use Patters\Behavioral\Bridge\Technologies\Sendable;

class EmailSender implements Sendable
{
    public function send($message)
    {
        echo "Email device is sending - $message \n";
    }
}
