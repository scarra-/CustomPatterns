<?php

namespace Patters\Behavioral\ChainOfResponsibilities\Validations;

use Patters\Behavioral\ChainOfResponsibilities\ValidationHandler;
use Patters\Behavioral\ChainOfResponsibilities\Interfaces\OrderInterface;

class PriceValidation extends ValidationHandler
{

    public function validate(OrderInterface $order)
    {
        if ($order->getPrice() <= 0) {
            return false;
        }

        return true;
    }
}
