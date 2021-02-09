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

                    <p>Choisissez votre catégorie (Actuelle : <b>Technologie</b>)</p>

                    <div class="card-check">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="CategorieRadio1">
                            <label class="form-check-label" for="CategorieRadio1">
                                Technologie
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="CategorieRadio2">
                            <label class="form-check-label" for="CategorieRadio2">
                                Sécurité
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="CategorieRadio3">
                            <label class="form-check-label" for="CategorieRadio3">
                                Culture
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="CategorieRadio4">
                            <label class="form-check-label" for="CategorieRadio4">
                                Automobile
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="CategorieRadio5">
                            <label class="form-check-label" for="CategorieRadio5">
                                Jeux vidéos
                            </label>
                        </div>


                    </div>


                    <p>Nombre d'articles à afficher (Actuel : <b>5</b>)</p>

                    <div class="card-check">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="numberArticle" id="NumberArticle1">
                            <label class="form-check-label" for="NumberArticle1">
                                5
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="numberArticle" id="NumberArticle2">
                            <label class="form-check-label" for="NumberArticle2">
                                10
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="numberArticle" id="NumberArticle3">
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