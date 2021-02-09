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
?>

<?php

$urlFeed = "https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/";
$nbrCard = 5;  //nnre de crds à afficher par défaut 

$cardsInfos = [];  //tableau pour les infos des Cards
// titre, date, img , description (article), lien vers article 
$lenghtMax = 33; //longueur du titre


$xml_file = getXml($urlFeed);

$rss = simplexml_load_string($xml_file);
//   echo 'var_dump de rss <br>';
// var_dump($rss);  
// echo '***** FIN **** var_dump de rss <br>';

$countTotalItems = "0"; //nbre d'items dans le flux d'origine

echo '<ul>';
foreach ($rss->channel->item as $item) {
  $countTotalItems++;
   // var_dump($item);
  if ($countTotalItems <= $nbrCard) {

    $titre = (string) $item->title;
    $datetime = date_create($item->pubDate);
    $pubdate = date_format($datetime, 'd M Y, H\hi');
    $urlImg = (string)$item->enclosure['url'];
    $description = strip_tags((string) $item->description);
    $linkArticle = (string)$item->link ;
    //echo 'titre vaut : ' . $titre . '<br>';
    //echo 'pubdate vaut : ' . $pubdate . '<br>';
    // echo 'urlImg vaut : ' . $urlImg . '<br>';
    // echo 'description vaut : ' . $description . '<br>';
    // echo 'linkArticle : ' . $linkArticle . '<br>';
 

    $cardsInfos[$countTotalItems] = ['titre' => $titre, 'date' => $pubdate, 'img' => $urlImg, 'description' => $description, 'link' => $linkArticle];
  }
 
 echo 'nbre totaal de items  = ' .  $countTotalItems . '<br>';
}
echo '</ul>';

  echo ' cardsInfos  <pre>';
  print_r($cardsInfos);
  '</pre>';
   // $sous_util = ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'] du tab utilisateurs
  $sous_util = $cardsInfos[5];
  echo '$sous_util / titre'. $sous_util['titre'] . '<br><br>';
?>
