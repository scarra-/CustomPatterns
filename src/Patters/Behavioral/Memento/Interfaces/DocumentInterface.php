<?php

namespace Patters\Behavioral\Memento\Interfaces;

interface DocumentInterface
{
    public function getName();

    public function getData();

    public function setContent($content);

    public function getContent();
}
