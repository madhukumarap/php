<?php 
// echo "Hello World";

// $x = 21;
// $name = "madhu";
// var_dump($x);
//data types
// var_dump(5);
// var_dump("John");
// var_dump(3.14);
// var_dump(true);
// var_dump([2, 3, 56]);
// var_dump(NULL);


// types of variables
/**
 * global
 * local
 * static
 */
// example for global scope
$x = 5; 

function myTest() {
    global $x;
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

$x1 = 5;
$y = 10;

function myTest1() {
  global $x1, $y;
  $y = $x1 + $y;
//   echo $y;
}

myTest1();
echo $y; // outputs 15

// example for static

?>