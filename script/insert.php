<?php

require("../function/function.php");

$msg = $_POST['message'];
echo($msg);
insertion_bdd($msg);

header('location:../index.php');