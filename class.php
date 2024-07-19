<?php 
//creation of class
class Fruit {
    //properties
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }

}
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$apple->set_color('red');
$banana->set_color('green');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo $apple->get_color();
echo $banana->get_color();

//You can use the instanceof keyword to check if an object belongs to a specific class:
    var_dump($apple instanceof Fruit)
?>