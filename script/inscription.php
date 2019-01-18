<?php

require("../function/function.php");

//si toute les données sont exacte -> création d'un compte

if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['verif_mdp'])){

	$nom = $_POST['nom'];
	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$verifMdp = $_POST['verif_mdp'];

	$password =md5($mdp);
		
	add_users($nom,$prenom,$mail,$password);
	header('location:../index.php');

}

