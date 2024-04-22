<?php

interface iCars
{
    public function getPrice();
    public function getWeight();
    public function mineIsBigger($obj);
}

class BMW implements iCars
{
    private $_price;
    private $_weight;


    public function __construct($_price, $_weight = 4242)
    {
        $this->_price = $_price;
        $this->_weight = $_weight;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getWeight()
    {
        return $this->_weight;
    }

    public function mineIsBigger($obj)
    {
        $nameClass = get_class($obj);

        if ($nameClass == "Toyota") {
            echo "Mine is bigger";
        } elseif ($nameClass == "Smart") {
            echo "Mine is way bigger !";
        } elseif ($nameClass == "Velib") {
            echo "LOL";
        } else {
            echo "Show me !";
        }
    }

    public static function lessExpensive()
    {
        return 15000;
    }
}

class Suzuki implements iCars
{
    private $_price;
    private $_weight;

    public function __construct($_price, $_weight = 4242)
    {
        $this->_price = $_price;
        $this->_weight = $_weight;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getWeight()
    {
        return $this->_weight;
    }
    public function mineIsBigger($obj)
    {
        $nameClass = get_class($obj);

        if ($nameClass === "Toyota") {
            echo "Mine is bigger";
        } elseif ($nameClass === "Smart") {
            echo "Mine is way bigger !";
        } elseif ($nameClass === "Velib") {
            echo "LOL";
        } else {
            echo "Show me !";
        }
    }

    public static function lessExpensive()
    {
        return 5000;
    }
}
