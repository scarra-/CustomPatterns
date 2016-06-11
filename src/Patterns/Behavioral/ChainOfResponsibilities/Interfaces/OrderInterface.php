<?php

namespace Patters\Behavioral\ChainOfResponsibilities\Interfaces;

interface OrderInterface
{
    public function getPrice();
    public function getCustomer();
    public function getDestination();
    public function getDeliveryDate();
}
