<?php
function bdd(){
    $dsn = "mysql:dbname=blog;host=localhost";//sans espace,  tout colle
    $user = "root";
    $passeword = "";
    try{
$bdd = new PDO($dsn,$user,$passeword);
    }catch(PDOException $e){
        echo "mistake:". $e->getMessage();
    }
    return $bdd;
}

?>