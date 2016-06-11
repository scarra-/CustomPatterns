<?php

namespace Patters\Behavioral\Observer\Interfaces;

interface DocumentInterface
{
    public function setStatus($status);
    public function getStatus();
}
