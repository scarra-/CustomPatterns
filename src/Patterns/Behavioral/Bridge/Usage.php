<?php

namespace Patters\Behavioral\Bridge;

use Patters\Behavioral\Bridge\Messages\LongMessage;
use Patters\Behavioral\Bridge\Messages\ShortMessage;
use Patters\Behavioral\Bridge\Technologies\SMSSender;
use Patters\Behavioral\Bridge\Technologies\EmailSender;

class Usage
{
    public function testBridge()
    {
        $shortMessage = new ShortMessage(new SMSSender());
        $longMessage = new LongMessage(new EmailSender());

        $shortMessage->sendMessage();
        $longMessage->sendMessage();
    }
}
