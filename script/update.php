<?php


$msg = $_POST['message'];
$id = $_POST['id'];



require("../function/function.php");
$msg = $_POST['message'];
$id = $_POST['id'];
update_bdd($msg,$id);

header('location:../index.php');