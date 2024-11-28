<?php

$password = 'root';
$user = 'root';
$server = 'localhost';
$bdname = 'bdestoque';

$conn = mysqli_connect (
    $server, 
    $user, 
    $password, 
    $bdname
);

?>