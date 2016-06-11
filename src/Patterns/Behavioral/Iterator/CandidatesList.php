<?php

namespace Patters\Behavioral\Iterator;

use Patters\Behavioral\Iterator\Interfaces\CandidateInterface;

class CandidatesList
{
    protected $candidatesArray = [];


    public function addCandidate(CandidateInterface $candidate)
    {
        $this->candidatesArray[] = $candidate;
    }

    public function removeCandidate(CandidateInterface $candidateToRemove)
    {
        foreach ($this->candidatesArray as $candidateKey => $candidate) {
            if ($candidate->getName() == $candidateToRemove->getName()) {
                unset($this->candidatesArray[$candidateKey]);
            }
        }
    }

    public function getCandidate($number)
    {
        return $this->candidatesArray[$number];
    }
}
