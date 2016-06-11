<?php

namespace Patters\Behavioral\ChainOfResponsibilities\Validations;

use Patters\Behavioral\ChainOfResponsibilities\ValidationHandler;
use Patters\Behavioral\ChainOfResponsibilities\Interfaces\OrderInterface;

class DeliveryDateValidation extends ValidationHandler
{
    public function validate(OrderInterface $order)
    {
        return ($order->getDeliveryDate() > time()) ? true : false;
    }
}
