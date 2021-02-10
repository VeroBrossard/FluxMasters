<?php

    require("basicinfo_controller.php");

    if(isset($_COOKIE["numberArticles"]) && isset($_COOKIE["category"])) {
        $number_articles = trim(htmlspecialchars(strip_tags($_COOKIE["numberArticles"])));
        $show_categories = $_COOKIE["category"];
    }

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

    $i = 1;
