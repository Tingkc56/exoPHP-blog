
    <?php
    include "header.php";
    require_once 'fonctions/bdd.php';
    require_once 'fonctions/user.php';
    $bdd = bdd();
    if(!empty($_POST)){
        $erreur = inscription();
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-3">
                <h1>Inscription sur Warp Code !</h1>
            </div>
        </div>
        <form method="post" action="">
<?php
    if(isset($erreur)):
    if($erreur):
?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="message erreur"><?=$erreur?></div>
                </div>
            </div>

<?php
    else :
?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="message confirmation">Votre inscription est validee !</div>
                </div>
            </div>
<?php
    endif;
endif;
?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>">
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" name="email" placeholder="Adresse e-mail *" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" name="emailconf" placeholder="Vérification de l'e-mail *"value="<?php if(isset($_POST['emailconf'])) echo $_POST['emailconf'] ?>">
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="password" name="password" placeholder="Mot de passe *">
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="password" name="passwordconf" placeholder="Vérification du mot de passe *">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" value="M'inscrire!">
                </div>
            </div>
        </form>
        <?php
    include "footer.php"
?>
    </div>
</body>
</html>