<?php

    if(!isset($_COOKIE["theme"])) {
        setcookie("theme", "default", time()+3600);
        header("Location: /");
    } else {
        $theme = trim(htmlentities(strip_tags($_COOKIE["theme"])));
        
            if($theme == "default") {
                $theme_name = "Sombre";
            } else if($theme == "light") {
                $theme_name = "Clair";
            }
    }