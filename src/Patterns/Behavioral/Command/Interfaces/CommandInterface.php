<?php

namespace Patters\Behavioral\Command\Interfaces;

interface CommandInterface
{
    public function execute();

    public function fallback(\Exception $e);
}
