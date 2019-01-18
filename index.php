<?php

if (isset($_COOKIE['pseudo'])) {
	echo 'Bonjour '.$_COOKIE['pseudo'].' !';
}
else {
	echo 'Notre cookie n\'est pas déclaré.';
}
?>
<!DOCTYPE html>
<html lang="fr">


<body id="page-top" class="index">



<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>

<script>
   alert( 'Hello, world!' );
 </script>


<?php 

include("includes/haut.inc.php");
if(isset($_GET['id'])){
    $modif = $_GET['id'];

}
 ?>
 
    <!-- About Section -->



    <p>
    <?php

if (isset($_COOKIE['pseudo'])) {
    echo 'Bonjour '.$_COOKIE['pseudo'].' !';
}
else {
	echo 'Notre cookie n\'est pas déclaré.';
}

?>


    </p>




    <section>
        <div class="container">
            <div class="row">              
                <form action="message.php" method="POST">
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="">
                            <?php 
                            if(isset($_GET['id'])){
                                include("includes/connexion.inc.php");
                                $query="SELECT * FROM messages WHERE id=$modif ";
                                $stmt=$pdo->query($query);
                                while($data=$stmt->fetch()){
                                    echo $data['contenue'];
                                }
}else{
 echo "Messages"; 
                            }
   
                            
                            ?>
                            
                            </textarea>


                            <input type="hidden" id="id" name= "id" value=" <?php if(isset($_GET['id'])){ echo $_GET['id'];}else{echo 0;} ?> "></input>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>                        
                </form>
            </div>


            <div class="row">
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
            <?php 

                include("includes/connexion.inc.php");
                $query="SELECT * FROM messages";
                $stmt=$pdo->query($query);
                while($data=$stmt->fetch()){
                    
                    echo "<blockquote>".$data['contenue']."</blockquote><a href='index.php?id=".$data['id']."'>  <button name='d' type='submit' class='btn btn-secondary'>Modifier</button> </a> <a href='includes\supprimer.php?id=".$data['id']."'> <button name='dd' type='submit' class='btn btn-secondary'>Suppresion</button>  </a>";
                     echo gmdate("Y-m-d H:i:s", $data['date']);
                     

                }
               
            
            ?>


                </div>
            </div>
        </div>
    </section>



<form action="page.php" onsubmit="return verifForm(this)">
  <p>
    Pseudo : <input type="text" name="pseudo" onblur="verifPseudo(this)" /><br />
    E-mail : <input type="text" name="email" size="30" onblur="verifMail(this)" /><br />
    Âge : <input type="text" name="age" size="2" onblur="verifAge(this)" /> ans<br />
    <input type="submit" value="Valider" />
  </p>  
</form>





<?php include("includes/bas.inc.php"); ?>
    

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
