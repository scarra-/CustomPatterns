<?php

namespace Patters\Behavioral\Command;

use Patters\Behavioral\Command\Commands\DeleteAllUsersCommand;

class Usage
{
    public function runCommand()
    {
        $invoker = new Invoker();
        $invoker->setCommand(new DeleteAllUsersCommand());
        $invoker->run();
    }
}
