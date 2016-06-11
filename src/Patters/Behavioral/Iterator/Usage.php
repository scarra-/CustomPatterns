<?php

namespace Patters\Behavioral\Iterator;

class Usage
{
    public function testIterator()
    {
        $list = new CandidatesList();
        $list->addCandidate(new Candidate('Arturs'));
        $list->addCandidate(new Candidate('Ivans'));

        $candidates = new Candidates($list);
        $candidates->next();

        return $candidates->current()->getName();
    }
}
