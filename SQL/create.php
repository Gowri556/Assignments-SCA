<?php

require "db.php";

try {    
    $sql = file_get_contents("init.sql");    
    $connection->exec($sql);
    echo "Table created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}$connection = null;