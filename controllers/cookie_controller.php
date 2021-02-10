<?php

    if(isset($_COOKIE["numberArticles"]) && isset($_COOKIE["category"])) {
        $number_articles = trim(htmlspecialchars(strip_tags($_COOKIE["numberArticles"])));
        $show_categories = trim(htmlspecialchars(strip_tags($_COOKIE["category"])));
    }