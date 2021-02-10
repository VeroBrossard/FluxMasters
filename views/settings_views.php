    <body>
        <div class="containt">

    valeur de _COOKIE['category']) est <?=$_COOKIE['category']?> <br>
    valeur de show_categories est <?=$show_categories?> <br>
            <div class="settings-card">
                <h1>Paramètres</h1>

                <p>Choisissez votre thème (Actuel : <b><?= $theme_name; ?></b>)</p>

                <form method="post">

                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="theme" id="theme1" value="default" autocomplete="off" <?= $theme == "default" ? "checked" : "" ?>>
                        <label class="btn btn-secondary" for="theme1">Thème sombre</label>

                        <input type="radio" class="btn-check" name="theme" id="theme2" value="light" autocomplete="off" <?= $theme == "light" ? "checked" : "" ?>>
                        <label class="btn btn-primary" for="theme2">Thème clair</label>

                        <input type="radio" class="btn-check" name="theme" id="theme3" value="modern" autocomplete="off" <?= $theme == "modern" ? "checked" : "" ?>>
                        <label class="btn btn-danger" for="theme3">Thème moderne</label>
                    </div>

                    <p>Choisissez votre catégorie</p>

                    <div class="card-check">

                        <?php
                        //$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
                        $rand_keys =  array_rand($arrayFluxOffered, 5); //tableau des intitulés
                        //var_dump($rand_keys);
                        echo ' pour info valeurs dans rand_keys => <br>';
                        for ($a=0;$a<=(count($rand_keys)-1); $a++){
                            echo $rand_keys[$a] . '<br>';
                        }


                        //pour info  $chosenFluxName =  $show_categories
                        if (in_array($show_categories, $rand_keys )) {         
                            echo ' valeurs cookie show_categories dans tab rand_keys <br>';                            
                     //on affiche tout le tableau $rand_keys indice max=5 (show_categories compris)
                     $indMax = 5;
                        }
                        else{
                            echo ' valeurs cookie show_categories PAAAAAS  dans tab rand_keys <br>';   
                          echo 'on l\'affiche en premier <br>';
                            ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="<?= $show_categories; ?>" name="category" id="CategorieRadio1" checked>
                                <label class="form-check-label" for="CategorieRadio1">
                                    <?= $show_categories; ?>
                                </label>
                            </div>
                            <?php
                        //on affiche show_categories checked  et le tableau $rand_keys indice max=4  

                        $indMax = 4;  
                     }
                        for ($i = 0; $i < $indMax; $i++) {

                            //echo $rand_keys[$i] . "<br>";
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="<?= $rand_keys[$i]; ?>" name="category" id="CategorieRadio1" <?= $show_categories == $rand_keys[$i] ? "checked" : "" ?>>
                                <label class="form-check-label" for="CategorieRadio1">
                                    <?= $rand_keys[$i]; ?>
                                </label>
                            </div>
                            <?php
                        }
                        //echo $arrayFluxOffered[$rand_keys[$i]] . "\n";
                

                        ?>

                    </div>
                    <p>Nombre d'articles à afficher (Actuel : <b><?= $number_articles; ?></b>)</p>
                    <div class="card-check">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="5" name="numberArticles" id="NumberArticle1" <?= $number_articles == "5" ? "checked" : "" ?>>
                            <label class="form-check-label" for="NumberArticle1">
                                5
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="10" name="numberArticles" id="NumberArticle2" <?= $number_articles == "10" ? "checked" : "" ?>>
                            <label class="form-check-label" for="NumberArticle2">
                                10
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Tout" name="numberArticles" id="NumberArticle3" <?= $number_articles == "Tout" ? "checked" : "" ?>>
                            <label class="form-check-label" for="NumberArticle3">
                                Tout
                            </label>
                        </div>
                    </div>

                    <button type="submit" name="change" class="btn btn-success mt-4">Enregistrer vos changements</button>

                </form>
            </div>
        </div>
        </div>
    </body>

    </html>