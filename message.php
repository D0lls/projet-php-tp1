<?php 

if(isset($_POST['id']) AND $_POST['id'] != 0){

    include("includes/connexion.inc.php");
   // $query="UPDATE messages(contenue) SET(:contenue) contenue='$_POST['message']' WHERE id='$_POST['id'];
   $query="UPDATE messages SET contenue = '".$_POST['message']."' WHERE id = '".$_POST['id']."'";
  //$query="INSERT INTO messages(contenue, date) VALUES(:contenue, :date)";
  $prep=$pdo->prepare($query);
   //$prep->bindValue(':contenue', "yo");
  // $prep->bindValue(':id', "5" );
    $prep->execute();
    header("Location:index.php");
}
else{
    include("includes/connexion.inc.php");
$query="INSERT INTO messages(contenue, date) VALUES(:contenue, :date)";
$prep=$pdo->prepare($query);
$prep->bindValue(':contenue', $_POST['message']);
$prep->bindValue(':date', time());
$prep->execute();
header("Location:index.php");
}




// $_POST['id']

// $_POST['message']

?>