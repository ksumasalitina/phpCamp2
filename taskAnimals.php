<?php
class Animal{
    public $food;
    public $location;
    function __construct($food, $location){
    $this->food = $food;
    $this->location = $location;
    }
    function makeNoise(){
        print_r("Звук тварини");
    }
    function eat(){}
    function sleep(){}
}

class Dog extends Animal{
    public $breed;
    function makeNoise(){
        print_r("Гав");
    }
}

class Cat extends Animal{
    public $age;
    function makeNoise(){
        print_r("Мяу");
    }
}

class Horse extends Animal{
    public $color;
    function makeNoise(){
        print_r("Ігого");
    }
}

class Vet{
    function treatAnimal(Animal $animal){
    print_r($animal->food.' '. $animal->location . '<br>');
    }
}

$dog = new Dog("meat", "Kyiv");
$cat = new Cat("fish", "Kharkiv");
$horse = new Horse("grass", "Lviv");
$veterinar = new Vet();
$animals = array($dog, $cat, $horse);
foreach ($animals as $animal){
    $veterinar->treatAnimal($animal);
}