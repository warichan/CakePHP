<?php
    $hostname = "localhost";
    $username = "warichan";
    $password = "123456";

    try {
          $db = new PDO("mysql:host=$hostname;dbname=dotinstall_cakephp_blog", $username, $password);
            echo "Connected to database\n";
    }   
    catch(PDOException $e) {
          echo $e->getMessage();
    }   
?>
