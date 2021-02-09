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
//cookie(fluxChoice) pour le flux à afficher

// $urlTest = $arrayFluxOffered ['Actualités'];
//   echo 'var_dump de urlTest <br>';
// var_dump($urlTest);  
// echo '***** FIN **** var_dump de urlTest <br>';

//je suppose que le user a choisi 'actualités mettre à jour avec choix cookie'
//choix du flux à afficher (mettre à jour avec choix du user cf arrayFluxOffered)
$urlFeed = $arrayFluxOffered ['Actualités'];
$xml_file = getXml($urlFeed);
$rss = simplexml_load_string($xml_file);
//   echo 'var_dump de rss <br>';
// var_dump($rss);  
// echo '***** FIN **** var_dump de rss <br>';

// calcul  limitation des items à afficher
$nbrCardWished = 5;  //nnre de crds à afficher par défaut (mettre à jour avec choix user !!!)
$nbrItemInFlux = count($rss->channel->item); // nbre d'items dans le flux

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
echo '***********affichage du tab  cardsInfos  <pre>';
print_r($cardsInfos);
'</pre>';


// $sous_util = $cardsInfos[5];  // exemple recup infos du 5éme item (!! le compte commence à 1)
// echo '$sous_util / urlimg  =  ' . $sous_util['urlImg'] . '<br><br>';

?>
