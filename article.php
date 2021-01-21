<?php
require_once "fonctions/bdd.php";
require_once "fonctions/blog.php";

$bdd = bdd();
$article = article();
$count = nb_commentaires();
$commentaires = commentaires();
?>


<?php
    include "header.php"
?>
    <div class="container article">
        <div class="row">
            <article>
                <div class="col-sm-5">
                    <img src="<?= $article["image"] ?>" alt="https://placeimg.com/640/480/people">
                </div>
                <div class="col-sm-7">
                    <p class="date">Posté le <time datetime="<?= formatage_date($article["publication"]) ?>"><?= formatage_date($article["publication"]) ?></time></p>
                    <h1><?= $article["titre"]?></h1>
                    <p><?= $article["accroche"] ?></p>
                </div>
            </article>
        </div>
    </div>
    <div class="container commentaires">
        <div class="row">
            <div class="col-xs-12">
                <h1>Commentaires (<?= $count ?>)</h1>
            </div>
        </div>
        <?php
         foreach($commentaires as $commentaire) :
        ?>
        <div class="row commentaire">
            <div class="col-xs-12">
                <p class="date">Posté par <?= $commentaire['pseudo']?> le <time datetime="<?= formatage_date($commentaire['publication'])?>"><?= formatage_date($commentaire['publication'])?></time> :</p>
                <p><?=$commentaire['commentaire'] ?></p>
            </div>
        </div>
        <?php
         endforeach;
        ?>
        <div class="row">
            <div class="col-xs-12">
                <form method="post" action="">
                    <!--<div class="row">
                        <div class="col-xs-12">
                            <div class="message erreur">Ici j'affiche un message d'erreur !</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="message confirmation">Ici j'affiche un message de confirmation !</div>
                        </div>
                    </div>-->
                    <textarea name="commentaire" placeholder="Votre commentaire *"></textarea>
                    <input type="submit" value="Commenter">
                </form>
            </div>
        </div>
 <?php
    include "footer.php"
?>
    </div>
</body>
</html>