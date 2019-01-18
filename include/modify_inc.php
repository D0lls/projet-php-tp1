<section>

        <div class="container">
            <div class="row">              
                <form action="script/update.php" method="post">
                    <div class="col-sm-10">

                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="Message"><?php  
                                $identifiant = $_GET['id'];
                                $sth = $bdd->prepare("SELECT msg FROM message WHERE id=$identifiant");
                                $sth->execute(); 
                                while($donnees = $sth->fetch())
                                {echo($donnees['msg']);
                                }?></textarea>
                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Modifier</button>
                    </div>                        
                </form>
            </div>
