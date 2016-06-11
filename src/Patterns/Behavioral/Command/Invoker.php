<?php

namespace Patters\Behavioral\Command;

use Patters\Behavioral\Command\Interfaces\CommandInterface;

class Invoker
{
    protected $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}
