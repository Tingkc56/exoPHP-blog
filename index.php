<?php
require_once "fonctions/bdd.php";
require_once "fonctions/blog.php";

$bdd = bdd();


if(!empty($_POST)){
    $articles = recherche();
}else{
    $articles = articles();
}
?>

<?php
    include "header.php"
?>
    <div class="container article">

<?php
    include "search.php";
?>

<?php
if(isset($_POST['query'])):   
?>
        <div class="row">
            <div class="col-xs-12">
            <h1>Resultat de votre recherche avec "<?=$_POST['query']?>"</h1>
            </div>
        </div>
<?php
endif;
?>
        <div class="row">
            <?php
         foreach($articles as $article) :
        ?>
            <div class="col-md-4 col-sm-6">
                <article>
                    <img src="<?= $article["image"] ?>" alt="<?= $article["titre"] ?>">
                    <p class="date">Posté le <time
                            datetime="<?= formatage_date($article["publication"]) ?>"><?= formatage_date($article["publication"]) ?></time>
                    </p>
                    <h1><?= $article["titre"] ?></h1>
                    <p><?= $article["accroche"] ?></p>
                    <a href="article.php?id=<?= $article['id'] ?>">Lire l'article</a>
                </article>
            </div>
            <?php
         endforeach;
        ?>
        </div>

    </div>
    <?php
    include "footer.php"
?>
</body>

</html>