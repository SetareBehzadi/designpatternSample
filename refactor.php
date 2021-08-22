<?php
interface cost
{
    public function getCost();

    public function getDescription();

    public function getTotalCost();

    public function getDetails();
}

class BasketCost implements cost
{
    public function getCost()
    {
        return 150000;
    }

    public function getDescription()
    {
        return 'Basket Cost';
    }


    public function getTotalCost()
    {
        return self::getCost();
    }

    public function getDetails()
    {
        return [
            self::getDescription() => self::getCost()
        ];

    }
}

class ShippingDecorator implements cost{
    private $cost;
    public function __construct(Cost $cost)
    {
        //ghabli ro begir
        $this->cost = $cost;
    }

    public function getCost()
    {
        return 1000;
    }

    public function getDescription()
    {
        return 'shipping Cost';
    }


    public function getTotalCost()
    {
        return $this->cost->getTotalCost() + self::getCost();
    }

    public function getDetails()
    {
        return $this->cost->getDetails() + [
                self::getDescription() => self::getCost()
            ];

    }
}

class basketWithTax implements cost{

    private $cost;
    public function __construct(Cost $cost)
    {
        $this->cost = $cost;
    }
    public function getCost()
    {
        return $this->cost->getCost() * 0.09;
    }

    public function getDescription()
    {
        return 'tax Cost';
    }


    public function getTotalCost()
    {
        return $this->cost->getTotalCost() + self::getCost();
    }

    public function getDetails()
    {
        return$this->cost->getDetails() + [
                self::getDescription() => self::getCost()
            ];

    }
}

$basket = new BasketCost;
$Shippingbasket = new ShippingDecorator( new BasketCost);
$Taxbasket = new basketWithTax( new BasketCost);

$taxBasketShipping =new ShippingDecorator($Taxbasket);
var_dump($taxBasketShipping->getDetails());
var_dump($taxBasketShipping->getTotalCost());