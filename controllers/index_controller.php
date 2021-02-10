<?php

function getXml($url)  //pour regler mon pb d'autorisation d'acces au flux rss
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  //curl_setopt($ch, CURLOPT_CAINFO, "/path/to/cacert.pem"); //absolute path to certificate
  //curl_setopt($ch, CURLOPT_CAINFO, "c:/path/to/cacert.pem");
  $curl_response = curl_exec($ch);
  curl_close($ch);
  return $curl_response;
}
//cookie(nbreArticles) pour le nombre de cards à afficher.

// ***** partie test cookie  category 
if (!empty($_COOKIE['category'])) {
  echo 'hosenFluxName   COOKIE ok <br>';
  $chosenFluxName = $_COOKIE['category'];
  echo 'hosenFluxName  = ' .  $chosenFluxName . '<br>';
} else {
  echo 'hosenFluxName  PAS DE COOKIE <br>';
  setcookie("category", 'Actualités', time() + 3600 * 24);
  $chosenFluxName = 'Actualités';
}

$urlFeed = $arrayFluxOffered[$chosenFluxName];
$xml_file = getXml($urlFeed);
$rss = simplexml_load_string($xml_file);
$fluxTitle = (string) $rss->channel->title;
//   echo 'var_dump de rss <br>';
// var_dump($rss);  
// echo '***** FIN **** var_dump de rss <br>';

//$nbrCardWished = 5;  //nnre de crds à afficher par défaut (mettre à jour avec choix user !!!)
$nbrItemInFlux = count($rss->channel->item); // nbre d'items dans le flux
// calcul  limitation des items à afficher
// ***** partie test cookie  nbre item à afficher 
if (!empty($_COOKIE['numberArticles'])) {
  echo 'nbrCardWished   COOKIE ok <br>';
  if ($_COOKIE['numberArticles'] == "Tout") {
    $nbrCardWished = $nbrItemInFlux;
  } else {
    $nbrCardWished = $_COOKIE['numberArticles'];
    echo 'nbrCardWished  = ' .  $chosenFluxName . '<br>';
  }
} else {
  echo 'nbrCardWished  PAS DE COOKIE <br>';
  setcookie("numberArticles", '5', time() + 3600 * 24);
  $nbrCardWished = '5';
}

$nbrCardToList = ($nbrCardWished <= $nbrItemInFlux) ?  $nbrCardWished : $nbrItemInFlux;
echo 'apres test .. nbrCardToList = ' . $nbrCardToList . '<br>';


$countTotalItems = "0"; //nbre d'items affichés au départ de la boucle
echo '<ul>';
foreach ($rss->channel->item as $item) {
  $countTotalItems++;
  // echo 'vardump de item <br>';
  // var_dump($item);

  if ($countTotalItems <= $nbrCardToList) {

    $title = (string) $item->title;
    $datetime = date_create($item->pubDate);
    $pubdate = date_format($datetime, 'd M Y, H\hi');
    $urlImg = (string)$item->enclosure['url'];
    $description = strip_tags((string) $item->description);
    $linkArticle = (string)$item->link;
    //echo 'title vaut : ' . $title . '<br>';
    //echo 'pubdate vaut : ' . $pubdate . '<br>';
    // echo 'urlImg vaut : ' . $urlImg . '<br>';
    // echo 'description vaut : ' . $description . '<br>';
    // echo 'linkArticle : ' . $linkArticle . '<br>';

    // remplissage du tableau 
    $cardsInfos[$countTotalItems] = ['title' => $title, 'date' => $pubdate, 'urlImg' => $urlImg, 'description' => $description, 'link' => $linkArticle];
  }
}
echo '</ul>';

echo 'nbre totaal de items  = ' .  $countTotalItems . '<br>';
//echo '***********affichage du tab  cardsInfos  <pre>';
//print_r($cardsInfos);
// '</pre>';
echo 'nbre totaal de items  = ' .  $countTotalItems . '<br>';
if (!empty($_COOKIE['theme'])) {
  echo 'theme   COOKIE ok <br>';
  $theme = $_COOKIE['theme'];
  echo 'hosenFluxName  = ' .  $theme . '<br>';
}
// $sous_util = $cardsInfos[5];  // exemple recup infos du 5éme item (!! le compte commence à 1)
// echo '$sous_util / urlimg  =  ' . $sous_util['urlImg'] . '<br><br>';


// if(!empty($my_theme)) {
//   setcookie("theme", $my_theme, time()+3600*24);
// }

// if(!empty($my_category)) {
//   setcookie("category", $my_category, time()+3600*24);
// }

// if(!empty($numberArticles)) {
//   setcookie("numberArticles", $numberArticles, time()+3600*24);
// }
