<?php

$x = array("a" => "Mercury", "b" => "Venus");  
$y = array("c" => "Jupiter", "d" => "Earth");  

// union of $x and $y(Union of $x and $y)
print_r($x + $y); 

//Equality of array (Returns true if $x and $y have the same key/value pairs)
var_dump($x == $y);

//Identity of array (Returns true if $x and $y have the same key/value pairs in the same order and of the same types)
var_dump($x === $y);

//Inequality of array (Returns true if $x is not equal to $y)
var_dump($x != $y);

//Non Identity(Returns true if $x is not identical to $y)
var_dump($x !== $y);

?>  