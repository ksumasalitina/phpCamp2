<?php
class Student {
    public $firstName;
    public $lastName;
    public $mark;
    public function __construct($a, $b, $c){
        $this->firstName = $a;
        $this->lastname = $b;
        $this->mark = $c;
    }
    public function getScholarship(){
        return ($this->mark == 5) ? 100 : 80;

    }

}

class Aspirant extends Student {
    public function getScholarship(){
        return ($this->mark==5) ? 200 : 180;


    }
}

$stud1 = new Student("Mark", "Bond", 4.5);
$stud2 = new Student("Ivan", "Ivanov", 5);
$asp1 = new Aspirant("Julia", "Str", 3);
$asp2 = new Aspirant("One", "Two", 5);
$arr = array($stud1, $stud2, $asp1, $asp2);
foreach($arr as $i){
    print_r($i->getScholarship() . "\n");
}