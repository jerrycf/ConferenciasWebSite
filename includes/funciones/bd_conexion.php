<?php 
    try {
        $conn =new mysqli('localhost', 'root', 'root', 'gdlwebcamp');

        if ($conn->connect_error)
            echo $error -> $conn->connect_error;
    } catch (\Throwable $th) {
        throw new Exception("Error, could not connect to database.");
    }

?>