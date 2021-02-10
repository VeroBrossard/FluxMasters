    <body>
        <div class="containt">

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
                        foreach ($arrayFluxOffered as $key => $value) {
                            if ($i <= 5) { ?>
                                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="<?= $key; ?>" name="category" id="CategorieRadio1" <?= $show_categories == $key ? "checked" : "" ?>>
                            <label class="form-check-label" for="CategorieRadio1">
                                <?= $key; ?>
                            </label>
                        </div>

                            <?php }
                            $i++;
                        }

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