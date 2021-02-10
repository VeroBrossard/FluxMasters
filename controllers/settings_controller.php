<?php

    require("basicinfo_controller.php");

    if(isset($_POST["change"])) {
        
        $my_theme = trim(htmlentities(strip_tags($_POST["theme"])));
        $my_category = trim(htmlspecialchars(strip_tags($_POST["category"])));
        $numberArticles = trim(htmlspecialchars(strip_tags($_POST["numberArticles"])));

            if(!empty($my_theme)) {
                setcookie("theme", $my_theme, time()+3600*24);
            }

            if(!empty($my_category)) {
                setcookie("category", $my_category, time()+3600*24);
            }

            if(!empty($numberArticles)) {
                setcookie("numberArticles", $numberArticles, time()+3600*24);
            }

                header("Location: /");

        }


    foreach($arrayFluxOffered as $key => $value) {
        for($key = 0; $key < 5; $key++) {
            echo $key;
        }
    }