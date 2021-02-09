<?php

    if(isset($_POST["change"])) {
        
        $my_theme = trim(htmlentities(strip_tags($_POST["theme"])));

            if(!empty($my_theme)) {

                if($my_theme == "default") {
                    setcookie("theme", "default", time()+3600);
                    header("Location: settings");

                } else if($my_theme == "light") {
                    setcookie("theme", "light", time()+3600);
                    header("Location: settings");
                }
            }
    }