<?php 
// Inheritance in OOP = When a class derives from another class.

// The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

// An inherited class is defined by using the extends keyword.
class Person{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function intro(){
        echo "The person's name is {$this->name} and age is {$this->age}.";
    }
}
// The child class can also have its own properties and methods:
class Student extends Person{
    public $roll;
    public function __construct($name, $age, $roll){
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }
    public function intro(){
        echo "The student's name is {$this->name} and age is {$this->age} and roll is {$this->roll}.";
    }
}
$student = new Student('John', 25, 1234);
$student->intro()
?>