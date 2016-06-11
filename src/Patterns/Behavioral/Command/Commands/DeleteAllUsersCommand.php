<?php

namespace Patters\Behavioral\Command\Commands;

use Patters\Behavioral\Command\Interfaces\CommandInterface;

class DeleteAllUsersCommand implements CommandInterface
{

    public function execute()
    {
        try {
            echo "Deleting all users...";
        } catch (\Exception $e) {
            return $this->fallback($e);
        }
    }

    public function fallback(\Exception $e)
    {
        echo "Handling errors..";
    }
}
