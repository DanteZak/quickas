<?php

$email = $_GET["email"];
$password = $_GET["password"];

$conexion = new mysqli("localhost", "root", "", "formulariobd");

$sql = 'INSERT INTO usuarios(usr_email, usr_password) VALUES ("' . $email . '","' . $password . '")';

$conexion->query($sql)

?>