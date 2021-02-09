<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/tootlip.css">

    <!-- Vérification du thème actuel -->

    <?php if($theme == "light") { ?>
         <link rel="stylesheet" href="assets/css/light_theme.css">
    <?php } else if($theme == "default" || $theme == "") { ?>
        <link rel="stylesheet" href="assets/css/default_theme.css">
    <?php } ?>


</head>