<?php

function inscription(){

    global $bdd;

    extract($_POST);
    $validation = true;
    $erreur = '';
    if(empty($pseudo)||empty($email)||empty($emailconf)||empty($password)||empty($passwordconf)){
        $validation = false;
        $erreur = "Tous les champs sont obligatoires !";
    }


    if(strlen($pseudo) < 3){
        $validation = false;
        $erreur = 'le pseudo est trop court !';

    }

    if(existe($pseudo)){
        $validation = false;
        $erreur = 'Ce compte existe deja !';
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $validation = false;
        $erreur = "L'adresse email m'est pas valide! ";
    }elseif($email!=$emailconf){
        $validation = false;
        $erreur = "Les mails n'est pas identique! ";
    }

    if(strlen($password) < 6){
        $validation = false;
        $erreur = 'le password doit avoir plus de 6 lettres !';
    }
    
    if($password != $passwordconf){
        $validation = false;
        $erreur = "Les mots de passe ne sont pas identique! ";
    }



    if($validation){
        $request = $bdd->prepare("INSERT INTO user(pseudo,email,password) VALUES(:pseudo, :email, :password)");
        $request->execute([
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT),
        ]);
        unset($_POST['pseudo']);
        unset($_POST['email']);
        unset($_POST['emailconf']);
    }
    return $erreur;
}


function existe($pseudo){
    global $bdd;
    $request = $bdd->prepare('SELECT count(*) FROM user WHERE pseudo=?');
    $request->execute([$pseudo]);
    $resultat = $request->fetch()[0];
    return $resultat;
}





//isset()和!empty 的区别
//empty确认变量是否是空，isset确认是否有变量，
?>