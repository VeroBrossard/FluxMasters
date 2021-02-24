<!-- partie ajoutée de William -->

<div class="collapse" id="navbarToggleExternalContent">
        <form id="container_parent" class="form_style" action="" method="post">

            <div id="container_parent" class="container_parent container-fluid">
                <div class="row" style="border:1px solid red;">
                    <!---------------------------------------------------------------------------->
                    <div class="col-xl-4 col_child p-5 d-flex justify-content-center" style="border:1px solid blue;">>
                        <div class="inner text-center">

                        <p>Choisissez votre thème (Actuel : <b><?= $theme_name; ?></b>)</p>
                            <div>
                            <input type="radio" class="btn-check" name="theme" id="theme1" value="default" autocomplete="off" <?= $theme == "default" ? "checked" : "" ?>>
                        <label class="btn btn-secondary" for="theme1">Thème sombre</label>
                            </div>

                            <div>
                            <input type="radio" class="btn-check" name="theme" id="theme2" value="light" autocomplete="off" <?= $theme == "light" ? "checked" : "" ?>>
                        <label class="btn btn-primary" for="theme2">Thème clair</label>
                            </div>

                            <div>
                            <input type="radio" class="btn-check" name="theme" id="theme3" value="modern" autocomplete="off" <?= $theme == "modern" ? "checked" : "" ?>>
                        <label class="btn btn-danger" for="theme3">Thème hommage</label> <!-- hommage à Denis  -->
                            </div>
                        </div>
                    </div>

                    <!---------------------------------------------------------------------------->
                    <div class="col-xl-4 col_child p-5 d-flex justify-content-center" style="border:1px solid gold;">>
                        <div class="inner text-center">
                            <h2>Choisir un Flux</h2>
                            <?php
                            foreach ($arrayFluxOffered as $key => $value) { 
                             // echo 'key est :' . $key . 'et $alue est = à '.$value.'<br>';?>
                                <input type="radio" id="<?= $key ?>" name="feed" value="<?= $key ?>" <?= isset($_POST['feed']) && $_POST['feed'] == $key ? 'checked' : '' ?>>
                                <label for="<?= $key ?>"><?= $key ?></label><br>
                            <?php } ?>

                        </div>
                    </div>
                    <!---------------------------------------------------------------------------->
                    <div class="col-xl-4 col_child p-5 d-flex justify-content-center"style="border:1px solid green;">>
                        <div class="inner text-center">
                            <h2>Nombre de flux</h2>
                            <div>
                                <input type="radio" id="5" name="number" value="4" <?= isset($_POST['number']) && $_POST['number'] == '5' ? 'checked' : '' ?> ?>
                                <label for="5">5</label>
                            </div>

                            <div>
                                <input type="radio" id="10" name="number" value="9" <?= isset($_POST['number']) && $_POST['number'] == '10' ? 'checked' : '' ?> ?>
                                <label for="10">10</label>
                            </div>

                            <div>
                                <input type="radio" id="tout" name="number" value="18" <?= isset($_POST['number']) && $_POST['number'] == '18' ? 'checked' : '' ?> ?>
                                <label for="tout">tout</label>
                            </div>
                            <input type="submit" class="btn btn_style" id="submit" value="SUBMIT" name="submit">
                        </div>
                    </div>
                    <!--------------------------------------------------------------------------->
                </div>
            </div>
        </form>
    </div>