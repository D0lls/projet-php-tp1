<div class="row">
        <div id="alert" class="alert alert-danger" style="display:none">
                <strong>Vous avez déja voté</strong>
        </div>

        <div class="col-md-12">
                <?php
                        $postParPage = 5;
                        $postTotalReq = $bdd->query('SELECT id FROM message');
                        $postTotal = $postTotalReq->rowCount();
                        $pageTotal = ceil($postTotal/$postParPage);

                        if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0){
                                $_GET['page'] = intval($_GET['page']);
                                $pageCourante = $_GET['page'];
                        }else{
                                $pageCourante = 1;
                        }

                        $start = ($pageCourante-1)*$postParPage;



                        $response = $bdd->query('SELECT id,msg,dates,vote from message ORDER BY dates ASC LIMIT '.$start.','.$postParPage);

                        while ($donnees = $response->fetch()) {
                ?>

                <blockquote>
                        <p>
                        <?php echo($donnees['msg']) ?>

                        </p>
                        <footer><?php echo (date('d m Y',$donnees['dates'])) ?></footer>

                        <small> <span id="compteur<?php echo $donnees['id'] ?>">(<?php echo($donnees['vote']." ") ?>votes)</span><strong><a class="like" data-id="<?php echo $donnees['id'] ?>"> votez ?</a></strong></small>

                </blockquote>
                
                <?php   
                        }
                $response->closeCursor(); // Termine le traitement de la requête

                ?>


<nav aria-label="Page navigation example" style="text-align: center;">
  <ul class="pagination">
  
    



                <?php
                for($i = 1;$i <= $pageTotal; $i++ ){
                echo("<li class=\"page-item\"><a class\"page-link\" href=\"index.php?page=".$i."\">".$i." </a>");
                }


                ?>
               
  </ul>
</nav>
        </div>
</div>
</section>