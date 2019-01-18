<!DOCTYPE html>
<html lang="fr">


<body id="page-top" class="index">

<?php include("includes/haut.inc.php"); ?>

   



 <form action="includes/verif.php" onsubmit="return verifForm(this)" method="POST">
Pseudo : <input type="text" id="pseudo" name="pseudo" onblur="verifPseudo(this)" /><br />
Mot de passe : <input type="text" id="passe" name="passe" onblur="verifPseudo(this)" /><br />
<button type="submit" class="btn btn-success btn-lg">connection</button>
</form>

<?php include("includes/bas.inc.php"); ?>
    
    <script src="jsss.js"></script>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
