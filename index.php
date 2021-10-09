<?php

require_once 'Bicycle.php';
require_once 'Automobile.php';
require_once 'Truck.php';


$truck = new Truck("green", 3, "fuel", 300, 50);


echo $truck->forward();

echo '<br> First truck is ' . $truck->isFull();

echo '<br>' . $truck->brake();

$otherTruck = new Truck("red", 3, "electric", 300, 300);

echo '<br>' . $otherTruck->forward();

echo '<br> Second Truk load : ' . $otherTruck->getTruckLoad();

echo '<br> Second Truck capacity : ' . $otherTruck->getStorageCapacity();

echo '<br> So this truck is ' . $otherTruck->isFull();

echo '<br>' . $otherTruck->brake();
