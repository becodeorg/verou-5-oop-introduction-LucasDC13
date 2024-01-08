<?php

declare(strict_types=1);

require_once "./Classes/Beverage.php";
require_once "./Classes/Beer.php";

$beverage2 = new Beer("blonde", 3.5, "Duvel", 8.5);

require "form-view.php";