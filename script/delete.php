<?php
require("../function/function.php");

$id =$_GET['id'];

delete_bdd($id);
header('location:../index.php');