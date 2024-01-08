<?php
declare(strict_types=1);

require_once "Person.php";

$person1 = new Person(50, "Basile");

// // that's equal to
// $person1->age = 50;
// $person1->name = "Basile";
$person2 = new Person(20, "Franky");    

require "form-view.php";