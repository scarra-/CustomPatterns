<?php

namespace Patters\Behavioral\Bridge\Messages;

use Patters\Behavioral\Bridge\Technologies\Sendable;

abstract class AbstractMessage
{
    protected $device;

    abstract public function sendMessage();

    public function __construct(Sendable $device)
    {
        $this->device = $device;
    }
}
