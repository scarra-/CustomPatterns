<?php

namespace Patters\Behavioral\ChainOfResponsibilities;

use Patters\Behavioral\ChainOfResponsibilities\Interfaces\OrderInterface;

abstract class ValidationHandler
{
    protected $successor;

    abstract public function validate(OrderInterface $order);


    public function addValidation(ValidationHandler $handler)
    {
        if (is_null($this->successor)) {
            $this->successor = $handler;
        } else {
            $this->successor->addValidation($handler);
        }
    }

    final public function validateOrder(OrderInterface $order)
    {
        $validationResult = $this->validate($order);

        if ($validationResult && (!is_null($this->successor))) {
            $this->successor->validateOrder($order);
        }

        return $validationResult;
    }
}
