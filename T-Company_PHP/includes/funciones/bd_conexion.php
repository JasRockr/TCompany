<?php
    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'tcompany';

    $conn = new mysqli($host, $user, $pass, $db_name);

    if($conn->connect_error) {
        echo $error->$conn->connect_error;
    }
?>