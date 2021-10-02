<?php
    $conn = new mysqli('fdb30.awardspace.net', '3810441_tcompany', 'DWwJny8W7!Km2T', '3810441_tcompany');

    if($conn->connect_error) {
        echo $error->$conn->connect_error;
    }
?>