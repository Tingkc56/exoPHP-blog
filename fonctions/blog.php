<?php

function articles(){
    global $bdd;
    $request = $bdd->query("SELECT id, titre, accroche, image, publication FROM articles");
    $articles = $request->fetchAll();
    return $articles;
}


function formatage_date($publication){
    $date = explode(" ", $publication);
    $date1 = explode('-', $date[0]);
    $heure = explode(':', $date[1]);
    $mois = ["", "Janvier", "Fevrier", "Mars", "Avril","Mai","Juin","Juillet","Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
    $resultat = $date1[2] . ' ' . $mois[(int)$date1[1]] . ' ' .$date1[0] . " a " . $heure[0] . ' h ' . $heure[1];
    return $resultat;

    // ou 
    // $publication = date('l j F Y'.' à '.'H:m');

}

function article(){
    global $bdd;
    
    $id = (int)$_GET['id'];

    $request2 = $bdd ->prepare('SELECT * FROM articles WHERE id=?');
    $request2->execute([$id]);

    $article = $request2->fetch();

    if(empty($article)){
        header('location: index.php');
    }else{
        return $article;
    }

}

function nb_commentaires(){ //看不懂
    global $bdd;
    $id = (int)$_GET['id'];
    $request = $bdd->prepare('SELECT COUNT(*) FROM commentaires WHERE articles_id=?');
    $request->execute([$id]);
    $nb_commentaires = $request->fetch()[0];//为什么后面要加个0？
    return $nb_commentaires;
}

function commentaires(){
    global $bdd;
    $id = (int)$_GET['id'];
    $request = $bdd->prepare('SELECT commentaires.*, user.pseudo FROM commentaires INNER JOIN user on commentaires.user_id = user.id AND commentaires.articles_id = ?');
    $request->execute([$id]);
    $commentaires = $request->fetchAll();
    
    return $commentaires;
}

function recherche(){
    global $bdd;
    extract($_POST);
    $request = $bdd->prepare('SELECT * FROM articles WHERE titre LIKE :query OR contenu LIKE :query');
    $request->execute([
        "query"=>'%'.$query.'%'
    ]);

    $recherche = $request->fetchAll();
    return $recherche;
}




//inner join是什么意思？？？

?>