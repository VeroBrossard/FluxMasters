    <body>

        <h1><?= $fluxTitle ?> </h1>
        <?php

        foreach ($cardsInfos as $key => $infos) {
            $sous_util = $cardsInfos[$key];
        ?>
            <div class="container p-0 my-0 bg-info text-dark border ">
                <div class="col-6 text-wrap p-0"> <br />
                    <div class="card ">
                        <div class="row text-dark">
                            <div class="card-body class=" px-5"">
                                <img src="<?= $sous_util['urlImg'] ?>" style="float: left; padding-right:30px;" width="150px" alt="mini photo de l'article">
                                <h5 class="card-title fw-normal"><?= $sous_util['title'] ?></h5>
                                <span style="   style=" clear: both;">article du <?= $sous_util['date'] ?></span>
                                <span>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#infos<?= $key ?>" class="btn btn-primary ">+
                                        d'info</button>
                                </span>
                                <!-- Tips:  Si vous ne désirez a sque l'écran parent se grise àl'ouveture de la fenêtre, ,il faut utiliser l’attribut data-backdrop="false" dans le code du bouton déclencheur :-->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- fin class row-->
            <!--   fenetre modale liée à <a> ou  par <button> par son id -->

            <div class="modal fade" id="infos<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" modal-dialog-centered">
                    <div class="modal-content fst-italic.">
                        <!-- Contenu de la fenêtre modale  -->
                        <img src="<?= $sous_util['urlImg'] ?>" alt=" photo de l'article">
                        <span style="color: blueviolet;" class="fst-italic ps-3">article du <?= $sous_util['date'] ?></span>
                        <span style="color: green; text-align:right;" class="pe-3"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></span>
                        <h5 class="card-title">
                            <div class="modal-header">
                                <h5 class="modal-title text-wrap"><?= $sous_util['title'] ?> </h5>
                            </div>
                            <div class="modal-body text-wrap fw-normal fst-italic">
                                <p><?= $sous_util['description'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

                            </div>
                    </div>
                </div>
            </div> <!-- fin du modal fade   -->
        <?php
        }
        ?>
    </body>

    </html>