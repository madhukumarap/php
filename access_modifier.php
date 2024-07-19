<?php 
// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class
class Fruit {
    public $name;
    protected $color;
    private $weight;
    public function set_name($name) {
        $this->name = $name;
    }
    protected function set_color($color) {
        $this->color = $color;
    }
    private function set_weight($weight) {
        $this->weight = $weight;
    }

}
$mango = new Fruit();
$mango->set_name('Mango');  // this give output
$mango->set_color('red');    // $mango->set_color('Yellow'); //this will give an error
$mango->set_weight('300');// $mango->set_weight('300'); //this will give an error

?>