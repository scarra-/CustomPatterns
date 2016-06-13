<?php

namespace Patters\Behavioral\Bridge\Messages;

use Patters\Behavioral\Bridge\Technologies\Sendable;
use Patters\Behavioral\Bridge\Messages\AbstractMessage;

class ShortMessage extends AbstractMessage
{
    public function sendMessage()
    {
        $this->device->send('Short message');
    }
}
