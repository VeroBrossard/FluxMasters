    <body>
        <!-- pour memoire  logo 01.net :
        src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/75435858_10158004797767650_4207896055368384512_n.jpg?_nc_cat=1&ccb=2&_nc_sid=dbb9e7&_nc_ohc=xx80r1C07HMAX96DW6W&_nc_ht=scontent-cdt1-1.xx&tp=27&oh=66c49190dafeb285c0aca3ee62c43908&oe=6046FE1F" -->

        <?php
        // pour   $cardsInfos[$countTotalItems] = ['title' => $title, 'date' => $pubdate, 'urlImg' => $urlImg, 'description' => $description, 'link' => $linkArticle];
        $sous_util = $cardsInfos[1];  // exemple recup infos du 1éme item (!! le compte commence à 1)
        // echo '$sous_util / urlimg  =  ' . $sous_util['urlImg'] . '<br><br>';
        ?>
        <!-- <div class="containt" style="border: 2px solid gold;">
            <div class="rss-card shadow p-3" style="border: 2px solid red;">
                <div class="row" style="border: 2px solid black;">
                    <div class="col-md-6" style="border: 2px solid pink;">
                        <img style="border: 2px solid blue; float: left;" width="50px" src="<?= $sous_util['urlImg'] ?>">
                        <span><?= $sous_util['title'] ?></span>
                    </div>

                    <div class="col-md-6 offset-md-3 col-lg-3">
                        <button type="button" class="btn btn-outline-info">Accéder aux informations</button>
                    </div>
                </div> 
            </div> 
        </div>  -->

        <div id="Exo_4" class="container p-0 my-0 bg-info text-dark border ">
            <div class="col-6 text-wrap p-0"> <br />
                <div class="card ">
                    <div class="row text-dark">
                        <div class="card-body">
                            <img src="<?= $sous_util['urlImg'] ?>" style=" border: 2px solid blue; float: left;" width="100px" alt="mini photo de l'article">
                            <h5 class="card-title"><?= $sous_util['title'] ?></h5>
                            <!-- <p class="card-text">L'école des métiers du numérique</p> -->

                            <button type="button" data-bs-toggle="modal" data-bs-target="#infos" class="btn btn-primary ">+
                                d'info</button>

                            <!-- Tips:  Si vous ne désirez a sque l'écran parent se grise àl'ouveture de la fenêtre, ,il faut utiliser l’attribut data-backdrop="false" dans le code du bouton déclencheur :-->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- fin class row-->
        <!--   fenetre modale liée à <a> ou  par <button> par son id -->
        <!-- // pour   $cardsInfos[$countTotalItems] = ['title' => $title, 'date' => $pubdate, 'urlImg' => $urlImg, 'description' => $description, 'link' => $linkArticle]; -->

        <div class="modal fade" id="infos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" modal-dialog-centered">
                <div class="modal-content">
                    <!-- Contenu de la fenêtre modale  -->
                    <img src="<?= $sous_util['urlImg'] ?>" alt=" photo de l'article">
                    article du <?= $sous_util['date'] ?>
                    <span style=" display: inline-block; text-align:right;"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></span>
                    <h5 class="card-title">
                        <div class="modal-header">
                            <h5 class="modal-title text-wrap"><?= $sous_util['title'] ?> </h5>
                        </div>
                        <div class="modal-body text-wrap">
                            <p><?= $sous_util['description'] ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

                        </div>
                </div>
            </div>
        </div> <!-- fin du modal fade   -->
    </body>

    </html>