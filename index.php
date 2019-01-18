<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<?php 
include("include/header_inc.php");
require("bdd/connection.php");
date_default_timezone_set('Europe/Paris');
?>

<?php if(isset($_GET['id'])) {
    // Inclusion de la modification
  include("include/modify_inc.php");
  
}
else {
    //inclusion de l'insertion    
 include("include/insert_inc.php");
}
?>


<?php 
if (isset($_SESSION['id'])){
  include("include/displayConnected_inc.php");
}
else {
  include("include/displayDisconnected_inc.php");
}
?>           


<?php include("include/footer_inc.php"); ?>

</body>

</html>