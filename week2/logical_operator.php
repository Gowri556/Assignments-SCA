<?php

$x = 40;  
$y = 50;


//and operator(True if both $x and $y are true)
if ($x == 40 and $y == 50)
{
    echo "Hello world! \n";
}
if ($x == 40 && $y == 50) {
    echo "Hello world! \n";
}

//or operator (True if either $x or $y is true)
if ($x == 40 or $y == 80) {
    echo "Hello world! \n";
}
if ($x == 40 || $y == 80) {
    echo "Hello world! \n";
}

//xor operator (True if either $x or $y is true, but not both)
if ($x == 40 xor $y == 80) {
    echo "Hello world! \n";
}

//not operator (True if $x is not true)
if ($x !== 90) {
    echo "Hello world!";
}

?>  