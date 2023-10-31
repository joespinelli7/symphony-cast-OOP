<?php

// A class is a template or outline (used for creating objects)
class Ship {

  // Creates the property name that can be used by objects instantiated from this class
  public $name;
}

// Instantiating an object from the class Ship using the keyword "new", an object being a filled in
// template or outline stemming from a class. Data held inside objects are called properties.
// Big diff. between Arrays and Objects is that w/ Array you can just create a new key and set data
// to it but with an Object, you need to pre-register the possible properties it may have in its class
// Object is structured and Array is unstructured
$myShip = new Ship();
// use (arrow) -> syntax to grab properties from inside object
$myShip->name = 'Batwing';

echo 'Ship name: ' . $myShip->name;

// Summary:
// Real diff. between Object and Array is that Object has a class that defines all possible properties that it can hold