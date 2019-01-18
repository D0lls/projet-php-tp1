<?php 

//permet l'insertion des messages dans la table messages
function insertion_bdd($message) {
require("../bdd/connection.php");
$message = htmlspecialchars($message);
$message = str_replace('\n','<br/>',$message);
$req = $bdd->prepare('INSERT INTO message(msg,dates) VALUES(:msg,:dates)');

$req->execute(array(
	'msg' => $message,
	'dates'=> time()


));
}


//permet de modifier un message dans la table message
function update_bdd($msg,$id){
	require("../bdd/connection.php");
	$req = $bdd->prepare('UPDATE message SET msg=:msg,dates=:dates WHERE id=:id');

	$req->execute(array(
		'msg' => $msg,
		'dates' => time(),
		'id' => $id
	));	
}


//permet de supprimer un message dans la table message
function delete_bdd($id){
	require("../bdd/connection.php");
	$req = $bdd->prepare('DELETE  FROM message WHERE id=:id');

	$req->execute(array(
		'id' => $id
	));
}

//permet d'ajouter un utilisateur dans la table utilisateurs
function add_users($nom,$mail,$password){
	require("../bdd/connection.php");
	$req = $bdd->prepare("INSERT INTO utilisateurs(nom,prenom,mail,password) VALUES(:nom,:prenom,:mail,:password)");

	$req->execute(array(
		'nom' => $nom,
		'mail' => $mail,
		'password' => $password

	));
}

//permet de selectionner l'email d'un utilisateur
function pick_user($mail){
require("../bdd/connection.php");
$req = $bdd->prepare('SELECT * from utilisateurs where mail = :mail ');

$req->execute(array(

	'mail' => $mail

));

$req = $req->fetch();


return $req;
}

//permet d'ajouter un vote au message
function update_vote($id,$ip){
require("../bdd/connection.php");

$req = $bdd->prepare('UPDATE message SET vote=vote+1,last_vote=:ip where id=:id ');

$req->execute(array(

	'id' => $id,
	'ip' => $ip
));

$req2 = $bdd->prepare('SELECT * from message where id=:id');

$req2->execute(array(


	'id' => $id

));


$req2 = $req2->fetch();

return $req2;


}

//permet de garder et vérifier la dernière ip qui a voter
function last_ip($id){
require("../bdd/connection.php");
$req = $bdd->prepare('SELECT * from message where id=:id');

$req->execute(array(


	'id' => $id
));

$req = $req->fetch();

return $req['last_vote'];

}




