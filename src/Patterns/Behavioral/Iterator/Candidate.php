<?php

namespace Patters\Behavioral\Iterator;

use Patters\Behavioral\Iterator\Interfaces\CandidateInterface;

class Candidate implements CandidateInterface
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
