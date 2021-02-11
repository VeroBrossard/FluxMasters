<?php

function getXml($url)  //pour regler mon pb d'autorisation d'acces au flux rss
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  //curl_setopt($ch, CURLOPT_CAINFO, "/path/to/cacert.pem"); //absolute path to certificate (déjà défini)
  //curl_setopt($ch, CURLOPT_CAINFO, "c:/path/to/cacert.pem");
  $curl_response = curl_exec($ch);
  curl_close($ch);
  return $curl_response;
}
//choix du site de flux rss
$codesource = getXml('https://www.01net.com/info/flux-rss/');

//récupération des flux (url et nom) de la page $codesource d'après regex
preg_match_all("#<a target=\"_blank\" href=\"//(.+)\" title=\"Flux RSS - 01net - (.+)\" rel=\"nofollow\">#iU", $codesource, $tableau_resultat_Rss);
//#i (insensible à la casse) 
//#U (modifier: Ungreedy. The match becomes lazy by default. Now a ? following a quantifier makes it greedy)


//affichage pour test
// echo'<br> ci-dessous, $tableau_resultat_Rss[1][0] => adressses url du flux 0 <br>';
// print_r($tableau_resultat_Rss[1][0]);

// echo'<br> ci-dessous, $tableau_resultat_Rss[2][0]  =>  nom du flux  0<br>';
// print_r($tableau_resultat_Rss[2][0]);
// echo "</pre>  FIN du print-r <br>";



// ***** partie test cookie  category de flux à afficher
if (!empty($_COOKIE['category'])) {
  $chosenFluxName = $_COOKIE['category'];
} else {
  setcookie("category", 'Actualités', time() + 3600 * 24);
  $chosenFluxName = 'Actualités';
}
$urlFeed = $arrayFluxOffered[$chosenFluxName]; //on récupère url stockée dans tableau
$xml_file = getXml($urlFeed);
$rss = simplexml_load_string($xml_file);


$fluxTitle = (string) $rss->channel->title;

 // nbre d'items dans le flux
$nbrItemInFlux = count($rss->channel->item);

//test cookie(nbreArticles) pour le nombre de cards à afficher.
// et calcul  limitation des items à afficher par nbrItemInFlux
// ***** partie test cookie  nbre item à afficher selon choix user ou pas...
if (!empty($_COOKIE['numberArticles'])) {
  $nbrCardWished = ($_COOKIE['numberArticles'] == "Tout") ? $nbrItemInFlux : $_COOKIE['numberArticles'];
} else {
  setcookie("numberArticles", '5', time() + 3600 * 24);
  $nbrCardWished = '5';
}
$nbrCardToList = ($nbrCardWished <= $nbrItemInFlux) ?  $nbrCardWished : $nbrItemInFlux;

$countTotalItems = "0"; //nbre d'items affichés au départ de la boucle
echo '<ul>';
foreach ($rss->channel->item as $item) {
  $countTotalItems++;

  if ($countTotalItems <= $nbrCardToList) {
    $title = (string) $item->title;
    $datetime = date_create($item->pubDate);
    $pubdate = date_format($datetime, 'd M Y, H\hi');
    $urlImg = (string)$item->enclosure['url'];
    $description = strip_tags((string) $item->description);
    $linkArticle = (string)$item->link;

    // remplissage du tableau cardsInfos pour affichage ensuite des infos par item
    $cardsInfos[$countTotalItems] = ['title' => $title, 'date' => $pubdate, 'urlImg' => $urlImg, 'description' => $description, 'link' => $linkArticle];
  }
}
echo '</ul>';

//test cookie(theme) pour le theme de couleurs à afficher.
if (!empty($_COOKIE['theme'])) {
  $theme = $_COOKIE['theme'];
}
