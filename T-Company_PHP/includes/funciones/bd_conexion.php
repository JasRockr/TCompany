<?php
    $conn = new mysqli('localhost', 'root', '', 'tcompany');

    if($conn->connect_error) {
        echo $error->$conn->connect_error;
    }
?>