<?php

// There are 4 basic principles in OOP
// Inheritance, Encapsulation, Abstraction and Polymorphism

//Lets see this example to talk about Inheritance

class Mobile {
    public $name;
    public $chipset;
    public $internalMemory;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
    }

    // methods for getting properties
    public function getName()
    {
        return "---".$this->name."---";
    }

    public function getChipset()
    {
        return $this->chipset;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory";
    }
}

//We need a class for mobiles with extra properties and methods that won't have every mobile 
//For example we could need a class for a mobile device with physical keyboard so we create a new one

class Blackberry {
    public $name;
    public $chipset;
    public $internalMemory;
    public $keyboard;


    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory, $keyboard )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->keyboard = $keyboard;
    }

    // methods for getting properties
    public function getName()
    {
        return "---".$this->name."---";
    }

    public function getChipset()
    {
        return $this->chipset;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    //new method for getting keyboard type
    public function getKeyboard()
    {
        return $this->keyboard;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory. It uses " . $this->keyboard . " Keyboard";
    }
}

$samsung = new Mobile('Samsung s20','Exynos',128);

echo $samsung->getName();

echo "<pre>";
var_dump($samsung);
echo "</pre>";

echo $samsung->getChipset();
echo "<br>";
echo $samsung->getSpecs();

echo "<br>";
echo "<br>";

$blackberry = new BlackBerry('BlackBerry','ARM',1, 'qwerty');

echo $blackberry->getName();

echo "<pre>";
var_dump($blackberry);
echo "</pre>";

echo $blackberry->getChipset();
echo "<br>";
echo $blackberry->getKeyboard();
echo "<br>";
echo $blackberry->getSpecs();