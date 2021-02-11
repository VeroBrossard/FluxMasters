

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

//$chosenFluxName = ('https://www.01net.com/info/flux-rss/'); 
//pour l'instant url unique, plus tard choix pour valeur dans tableau de sites proposant des flux rss à lire.
//$urlFeed = $chosenFluxName; //plus tard, valeur dans tableau url à lire extrait d'un site de flux rss.
//$xml_file = getXml($urlFeed);
//$rss = simplexml_load_string($xml_file);
//echo 'debut var_dump var_dump($xml_file) <br>';
//var_dump($xml_file) ;
//echo '  ****  FIN var_dump var_dump($xml_file) <br>';


// $codesource = getXml('https://www.01net.com/info/flux-rss/');
// echo $codesource;

$codesource = getXml('https://www.01net.com/info/flux-rss/'); 

//echo $codesource;
//#<div class=\"kCrYT\"><a href=\"/url\?q=(.+)\"><h3 class=\".+\">(.+)</div></h3>.+</a></div>#

//#<div class=\"row bloc\"><a target=\"_blank\" href=\"//(.+)\" title=\"Flux RSS - 01net - (.+)\" rel=\"nofollow\">#

//(On met des # autour du code, on échappe les “doubles quote” avec un \ 
//idem pour les ? puis on vire tout ce qui peut varier et qu’on ne veut pas 
//en le remplaçant par .+ (qui veut dire n’importe quel caractère, plusieurs fois).
//Et pour finir on met des parenthèses (.+) sur ce que l’on veut capturer.)

preg_match_all("#<a target=\"_blank\" href=\"//(.+)\" title=\"Flux RSS - 01net - (.+)\" rel=\"nofollow\">#iU", $codesource, $tableau_resultat_Rss);
//#i (insensible à la casse) 
//#U (modifier: Ungreedy. The match becomes lazy by default. Now a ? following a quantifier makes it greedy)
echo "debut du print-r  <br> <pre>";
// print_r($tableau_resultat_Rss);

echo 'ci-dessous, $tableau_resultat_Rss[1] <br>';
print_r($tableau_resultat_Rss[1]);

echo '<br>  ci-dessous, $tableau_resultat_Rss[2] <br>';
print_r($tableau_resultat_Rss[2]);

echo'<br> ci-dessous, $tableau_resultat_Rss[1][0] <br>';
print_r($tableau_resultat_Rss[1][0]);

echo'<br> ci-dessous, $tableau_resultat_Rss[2][0] <br>';
print_r($tableau_resultat_Rss[2][0]);
echo "</pre>  FIN du print-r <br>";

?>

<!-- <div class="row bloc"> 
<a target="_blank" href="//www.01net.com/rss/actualites/" title="Flux RSS - 01net - Actualités" rel="nofollow">
  <i class="fa fa-rss fa-2x padding-inside-all-s bg-color color-txt-0 pull-left"></i>
  <p><strong>Flux RSS - 01net - Actualités</strong><br>Retrouvez toutes les actualités 01net</p>
</a> 
</div> -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

“savoir déléguer c’est bien mais savoir faire c’est mieux” (Punchline d’autodidacte), <br><br>

  tentative de scrapping 01.net<br>  

1) Trouver un site Web à scraper <br>
https://www.01net.com/info/flux-rss/

2)selectionner l'element concerné avec F12<br>
et copier sa valeur depuis la section "element" <br>
<"h3 class="r"><"a" href="/url?q=https://en.wikipedia.org/wiki/Web_scraping&amp;sa=U&amp;ved=0ahUKEwjM0ZaN7qPXAhVQnRQKHdLbBjsQFggUMAA&amp;usg=AOvVaw1Q4Z5-bDS69Jz5kNq6oGLf"><"b>Web scraping</"b> - Wikipedia</"a></"h3>

3)transformer le code source à capturer en une “Regex”.<br>
 ce qui donne = ><mark> #<"h3 class=\"r\"><"a href=\"/url\?q=.+\">(.+)</"a></"h3>#</mark>
<i>(On met des # autour du code, on échappe les “doubles quote” avec un \ <br>
idem pour les ? puis on vire tout ce qui peut varier et qu’on ne veut pas <br>
en le remplaçant par .+ (qui veut dire n’importe quel caractère, plusieurs fois). <br>
Et pour finir on met des parenthèses sur ce que l’on veut capturer.)</i><br>


</body>
</html>