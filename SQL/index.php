<?php

require "db.php";

try{
    $sql = "SELECT * FROM tablee.content";
    $stmt = $connection->query($sql);
    echo "<pre>";
    print_r($stmt->fetch());
    echo "</pre>";
    $users = [];
    while ($user = $stmt->fetch()) {
        $users[] = $user["full_name"];
    }
}catch(PDOException $error) {
    echo $error->getMessage();
}

?>



