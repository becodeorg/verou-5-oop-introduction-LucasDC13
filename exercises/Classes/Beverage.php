<?php 
class Beverage
{
    // Properties
    protected $color;
    protected $price;
    protected $temperature;

    // Constructor 
    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    // Methods
    public function getColor () {
        return $this->color;
    }
    public function setColor(string $color) {
        $this->color = $color;
    }
    public function getInfo () {
        return "This beverage is $this->temperature and $this->color. Price = €$this->price";
    }


}