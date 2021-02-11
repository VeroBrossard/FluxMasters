
<?php

// ex title controller
$site_name = "Flux Masters";

if(!isset($title_page)) {
    echo "<title>$site_name</title>";
} else {
   echo "<title>$title_page - $site_name</title>";
}
//ex themes_controller
if(!isset($_COOKIE["theme"])) {
  setcookie("theme", "default", time()+3600);
  header("Location: /");
} else {
  $theme = trim(htmlentities(strip_tags($_COOKIE["theme"])));
  
      if($theme == "default") {
          $theme_name = "Sombre";
      } else if($theme == "light") {
          $theme_name = "Clair";
      } else if($theme == "modern") {
          $theme_name = "Moderne";
      }
}
    //ex stl.php
    ?>
    <!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/header.css">

    <!-- Vérification du thème actuel -->

    <?php if($theme == "light") { ?>
         <link rel="stylesheet" href="assets/css/light_theme.css">
    <?php } else if($theme == "default" || $theme == "") { ?>
        <link rel="stylesheet" href="assets/css/default_theme.css">
    <?php } else if($theme == "modern") { ?>
        <link rel="stylesheet" href="assets/css/modern_theme.css">
    <?php } ?>


</head>