<?php 
class Person
{
    // Properties
    public $name;
    public $age;

    // Constructor 
    public function __construct(int $age, string $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    // Methods
    public function sayHello () {
        return "Hello, my name is $this->name and I am $this->age years old.";
    }
}