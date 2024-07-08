<?php

try {
     $conn = new PDO("mysql:host=localhost;dbname=car_rental", "root", "");
} catch (PDOException $ex) {
     echo "CONNECTION ERROR " . $ex->getMessage();
}


