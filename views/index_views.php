    <body>
        <!-- pour memoire  logo 01.net :
        src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-1/cp0/p50x50/75435858_10158004797767650_4207896055368384512_n.jpg?_nc_cat=1&ccb=2&_nc_sid=dbb9e7&_nc_ohc=xx80r1C07HMAX96DW6W&_nc_ht=scontent-cdt1-1.xx&tp=27&oh=66c49190dafeb285c0aca3ee62c43908&oe=6046FE1F" -->

        <?php
// pour   $cardsInfos[$countTotalItems] = ['title' => $title, 'date' => $pubdate, 'urlImg' => $urlImg, 'description' => $description, 'link' => $linkArticle];
$sous_util = $cardsInfos[1];  // exemple recup infos du 1éme item (!! le compte commence à 1)
// echo '$sous_util / urlimg  =  ' . $sous_util['urlImg'] . '<br><br>';
?>

        <div class="containt">

            <div class="rss-card shadow p-3">

                    <div class="row">
                        <div class="col-md-6">
                            <img width="50px" src="<?=$sous_util['urlImg']?>">
                            <span><?=$sous_util['title']?></span>
                        </div>

                        <div class="col-md-6 offset-md-3 col-lg-3">
                            <button type="button" class="btn btn-outline-info">Accéder aux informations</button>
                        </div>
                        
                        
                    </div>  <!-- fin du row  -->
     
            </div> <!-- fin card -->

        </div>  <!-- fin containt -->
    </body>

    </html>