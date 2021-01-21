
<?php
    include "header.php"
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-offset-3">
                <h1>Connectez-vous !</h1>
            </div>
        </div>
        <form method="post" action="">
            <!--<div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="message erreur">Ici j'affiche un message d'erreur !</div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" name="pseudo" placeholder="Pseudo *">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="password" name="password" placeholder="Mot de passe *">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" value="Me connecter!">
                </div>
            </div>
        </form>
        <?php
    include "footer.php"
?>
    </div>
</body>
</html>