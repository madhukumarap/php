<?php  
// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

//     Interfaces cannot have properties, while abstract classes can
//     All interface methods must be public, while abstract class methods is public or protected
//     All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
//     Classes can implement an interface while inheriting from another class at the same time
interface Animal {
    public function makeSound();
  }
  
  // Class definitions
  class Cat implements Animal {
    public function makeSound() {
      echo " Meow ";
    }
  }
  
  class Dog implements Animal {
    public function makeSound() {
      echo " Bark ";
    }
  }
  
  class Mouse implements Animal {
    public function makeSound() {
      echo " Squeak ";
    }
  }
  
  // Create a list of animals
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
    $animal->makeSound();
  }
 


?>