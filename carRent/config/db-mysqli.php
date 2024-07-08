<?php

$conn = mysqli_connect('localhost', 'root', '', 'car_rental');
if (!$conn) {
     echo 'Connection error' . mysqli_connect_error();
}
