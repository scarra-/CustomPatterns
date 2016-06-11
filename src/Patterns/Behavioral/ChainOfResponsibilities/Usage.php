<?php

namespace Patters\Behavioral\ChainOfResponsibilities;

use Patters\Behavioral\ChainOfResponsibilities\Validations\PriceValidation;
use Patters\Behavioral\ChainOfResponsibilities\Validations\DeliveryDateValidation;
use Patters\Behavioral\ChainOfResponsibilities\Validations\DestinationValidation;
use Patters\Behavioral\ChainOfResponsibilities\Validations\CustomerValidation;

class Usage
{
    public function runChain()
    {
        $chain = new CustomerValidation();
        $chain->addValidation(new DeliveryDateValidation());
        $chain->addValidation(new DestinationValidation());
        $chain->addValidation(new PriceValidation());

        return [
            $chain->validateOrder(new Order(101, 'Arturs', 'Latvia', time()+5000)),
            $chain->validateOrder(new Order(101, 'Angry Gnome', 'Latvia', time()+5000))
        ];
    }
}
