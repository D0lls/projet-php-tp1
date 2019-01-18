<?php 

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

function update_bdd($msg,$id){
	require("../bdd/connection.php");
	$req = $bdd->prepare('UPDATE message SET msg=:msg,dates=:dates WHERE id=:id');

	$req->execute(array(
		'msg' => $msg,
		'dates' => time(),
		'id' => $id
	));	
}

function delete_bdd($id){
	require("../bdd/connection.php");
	$req = $bdd->prepare('DELETE  FROM message WHERE id=:id');

	$req->execute(array(
		'id' => $id
	));
}

function add_users($nom,$prenom,$mail,$password){
	require("../bdd/connection.php");
	$req = $bdd->prepare("INSERT INTO utilisateurs(nom,prenom,mail,password) VALUES(:nom,:prenom,:mail,:password)");

	$req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'mail' => $mail,
		'password' => $password

	));
}

function pick_user($mail){
require("../bdd/connection.php");
$req = $bdd->prepare('SELECT * from utilisateurs where mail = :mail ');

$req->execute(array(

	'mail' => $mail

));

$req = $req->fetch();


return $req;
}


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

function last_ip($id){
require("../bdd/connection.php");
$req = $bdd->prepare('SELECT * from message where id=:id');

$req->execute(array(


	'id' => $id
));

$req = $req->fetch();

return $req['last_vote'];

}




