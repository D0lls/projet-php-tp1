<?php 

//Va permettre la connection a la bdd

$serv="localhost";
$user="root";
$pass="";
$db="tp1_andrusiak";

$pdo = new PDO("mysql:host=$serv;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

