<?php

namespace Patters\Behavioral\Observer;

use Patters\Behavioral\Observer\Interfaces\DocumentInterface;

class Document implements DocumentInterface
{
    protected $status;

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
