<?php

namespace Patters\Behavioral\ChainOfResponsibilities\Validations;

use Patters\Behavioral\ChainOfResponsibilities\ValidationHandler;
use Patters\Behavioral\ChainOfResponsibilities\Interfaces\OrderInterface;

class CustomerValidation extends ValidationHandler
{

    public function validate(OrderInterface $order)
    {
        return !in_array($order->getCustomer(), $this->getBannedCustomers()) ? true : false;
    }

    private function getBannedCustomers()
    {
        return [
            'John Smith',
            'Chappy from Wonderland',
            'Angry Gnome',
        ];
    }
}
