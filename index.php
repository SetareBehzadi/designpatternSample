<?php

/*class BasketCost
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

class BasketWithShipping extends BasketCost
{
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
        return parent::getTotalCost() + self::getCost();
    }

    public function getDetails()
    {
        return parent::getDetails() + [
                self::getDescription() => self::getCost()
        ];

    }
}

class basketWithTax extends BasketCost
{
    public function getCost()
    {
        return parent::getCost() * 0.09;
    }

    public function getDescription()
    {
        return 'tax Cost';
    }


    public function getTotalCost()
    {
        return parent::getTotalCost() + self::getCost();
    }

    public function getDetails()
    {
        return parent::getDetails() + [
                self::getDescription() => self::getCost()
            ];

    }
}

class basketWithTaxAndShipping extends basketWithTax
{
    public function getCost()
    {
        return 15000;
    }

    public function getDescription()
    {
        return 'shipping-tax Cost';
    }


    public function getTotalCost()
    {
        return parent::getTotalCost() + self::getCost();
    }

    public function getDetails()
    {
        return parent::getDetails() + [
                self::getDescription() => self::getCost()
            ];

    }
}*/
/*$basket = new basketWithTaxAndShipping;
var_dump($basket->getDetails());
var_dump($basket->getTotalCost());*/
require_once "refactor.php";