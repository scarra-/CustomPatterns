<?php

namespace Patters\Behavioral\ChainOfResponsibilities;

use Patters\Behavioral\ChainOfResponsibilities\Interfaces\OrderInterface;

class Order implements OrderInterface
{
    protected $price;
    protected $customer;
    protected $destination;
    protected $deliveryDate;

    public function __construct($price, $customer, $destination, $deliveryDate)
    {
        $this->price        = $price;
        $this->customer     = $customer;
        $this->destination  = $destination;
        $this->deliveryDate = $deliveryDate;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
}
