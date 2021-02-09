<?php

    $site_name = "Flux Masters";

    if(!isset($title_page)) {
        echo "<title>$site_name</title>";
    } else {
       echo "<title>$title_page - $site_name</title>";
    }


