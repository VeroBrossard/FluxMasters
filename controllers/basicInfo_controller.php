<?php
$cardsInfos = [];  //initialisation du tableau pour stocker les infos des Cards

        //  $cardsInfos[$ind] =  [
        // 'title' => $title, (titre de l'ietm affiché)
        // 'date' => $pubdate, (date de publication)
        // 'urlImg' => $urlImg, (adress url)
        // 'description' => $description, (corps de l'article)
        //'link' => $linkArticle]; (lien vers article complet)

        //$sous_util = $cardsInfos[1];  exemple recup infos du 1éme item (!! le compte commence à 1)
        // urlimg  =  ' . $sous_util['urlImg'] . '<br><br>';

$arrayFluxOffered = [
  'Actualités' => 'https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/',
  'Tous les Tests 01.net' => 'https://www.01net.com/rss/tests/les-derniers-tests/rss-derniers-tests/',
  'Produits High-Tech' => 'https://www.01net.com/rss/actualites/produits/',
  'Applis and Logiciels' => 'https://www.01net.com/rss/actualites/applis-logiciels/',
  'Jeux vidéos' => 'https://www.01net.com/rss/actualites/jeux/',
  'Technologie' => 'https://www.01net.com/rss/actualites/technos/',
  'Buzz société' => 'https://www.01net.com/rss/actualites/buzz-societe/',
  'Culture Médias' => 'https://www.01net.com/rss/actualites/culture-medias/',
  'Politique, Droit' => 'https://www.01net.com/rss/actualites/politique-droits/',
  'Sciences, Recherche' => 'https://www.01net.com/rss/actualites/science-recherche/',  
  'Sécurité' => 'https://www.01net.com/rss/actualites/securite/',
  'Auto connectée' => 'https://www.01net.com/rss/voiture-connectee/',
  'Appli Logiciels' => 'https://www.01net.com/rss/actualites/applis-logiciels/',
  'Technologies' => 'https://www.01net.com/rss/actualites/technos/',
  'Top 10 01.net' => 'https://www.01net.com/rss/actualite/top-10/'
]


?>