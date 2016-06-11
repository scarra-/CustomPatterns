<?php

namespace Patters\Behavioral\Iterator;

use Patters\Behavioral\Iterator\Interfaces\CandidateInterface;

class Candidates
{
    protected $candidateNumber = 0;

    public function __construct($candidatesList)
    {
        $this->candidatesList = $candidatesList;
    }

    public function next()
    {
        //Some number validation...
        $this->candidateNumber++;
    }

    public function previous()
    {
        //Some number validation...
        $this->candidateNumber--;
    }

    public function current()
    {
        return $this->candidatesList->getCandidate($this->candidateNumber);
    }
}
