<?php

namespace Patters\Behavioral\Memento;

use Patters\Behavioral\Memento\Interfaces\DocumentInterface;

class Document implements DocumentInterface
{
    protected $name;
    protected $data;
    protected $content;

    public function __construct($name, $data)
    {
        $this->name = $name;
        $this->data = $data;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}
