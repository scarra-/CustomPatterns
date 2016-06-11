<?php

namespace Patters\Behavioral\ChainOfResponsibilities\Validations;

use Patters\Behavioral\ChainOfResponsibilities\ValidationHandler;
use Patters\Behavioral\ChainOfResponsibilities\Interfaces\OrderInterface;

class DestinationValidation extends ValidationHandler
{
    public function validate(OrderInterface $order)
    {
        return in_array($order->getDestination(), $this->getAvailableCountries()) ? true : false;
    }

    private function getAvailableCountries()
    {
        return [
            'Latvia',
            'Bratislava',
            'Wonderland',
            'Australia'
        ];

    }
}
