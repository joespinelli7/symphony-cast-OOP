<?php

// A class is a template or outline (used for creating objects)
class Ship {

  // Creates the property name that can be used by objects instantiated from this class
  public $name;

//  Here assigning a default value for the following 3 properties in case one isn't set when instantiated in an object
  public $weaponPower = 0;

  public $jediFactor = 0;

  public $strength = 0;

//  Method is just like a function except it lives inside of the class and therefore have to call it on the object
  public function sayHello() {
    echo "Herro!";
  }
  public function weaponPower() {
    return $this->name;
  }

  public function jediFactor() {
    return $this->name;
  }

  public function strength() {
    return $this->name;
  }

  public function getName() {
    return $this->name;
  }
}

// Instantiating an object from the class Ship using the keyword "new", an object being a filled in
// template or outline stemming from a class. Data held inside objects are called properties.
// Big diff. between Arrays and Objects is that w/ Array you can just create a new key and set data
// to it but with an Object, you need to pre-register the possible properties it may have in its class
// Object is structured and Array is unstructured
$myShip = new Ship();
// use (arrow) -> syntax to grab properties from inside object
$myShip->name = 'Batwing';
$myShip->weaponPower = 69;

echo 'Ship name: ' . $myShip->name;

// Chapter 02 Summary:
// Real diff. between Object and Array is that Object has a class that defines all possible properties that it can hold

echo '<hr/>';
// Use () to signify you're calling a method and not a property
$myShip->sayHello();

echo '<hr/>';
echo $myShip->getName();

echo '<hr/>';
var_dump($myShip->weaponPower);