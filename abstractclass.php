<?php 
// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// An abstract class or method is defined with the abstract keyword:
abstract class ParentClass {
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3() : string;
  }
//   When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

// So, when a child class is inherited from an abstract class, we have the following rules:

// The child class method must be defined with the same name and it redeclares the parent abstract method
// The child class method must be defined with the same or a less restricted access modifier
// The number of required arguments must be the same. However, the child class may have optional arguments in addition

//Exapmle
abstract class Car {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}
class Audi extends Car{
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}
class Volvo extends Car{
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";
$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";


?>