<?php 
// A destructor is called when the object is destructed or the script is stopped or exited.

// If you create a __destruct() function, PHP will automatically call this function at the end of the script.
// Notice that the destruct function starts with two underscores (__)!

class Person {
    public $name;
    public $age;
    public $id;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function set_id($id) {
        $this->id = $id;
    }
    function __destruct() {
        echo "The person's name is {$this->name}.";
    }
}
$person = new Person('John', 25);
$person->set_id(1234);

?>