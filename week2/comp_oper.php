<?php
//Problem :Check whether the user entered name matches with the stored name using equality comparison operator
$input_name = "Gowri";
$stored_name = "Gowri";

if ($input_name == $stored_name) {
  echo "Congratulations : Welcome " , $input_name ;
  echo "\n";
}
else {
    echo "Invalid Credentials";
}

//Problem :Whether the input password size is greater than 4

$password = "goi";

if (strlen($password) <= 4){
    echo "Your password minimum length should be 4";
}

?>
 