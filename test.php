<?php

// 所有可以写的格式
        // 'ma chaine de caractere';
        // "c'est la meme ici";
        // 2;
        // 8.56;
        // true;
        // false;
        // [
        //     "titre" => "Mon titre",
        //     "contenu"=> "Mon contenu" 
        // ];

        // ["titre","contenu"];

$chiffre = ["valeur1",8,"valeur2"];

echo $chiffre[0];
echo "</br>";
$another = 8;
$another = 2;
echo 'le chiffre est $another';
echo "</br>";
echo "le chiffre est $another"; // 单括号和双括号的区别。
echo "</br>";
echo 'le chiffre est' . $another; // 用 . 来连接两个字符串。


//超级全局变量

echo "votre nom est" . $_GET["nom"] . 'et votre pseudo est' . $_GET['pseudo'];
echo "</br>";
//constantes
define("CHIFFRE",50);
echo CHIFFRE;
echo "</br>";

//字符串应用
$chaine1 = "HELLO";

$chaine2 = "TOTO";

// $chaine1 = $chaine1 . " " . $chaine2 . " !";
// ne marche pas pourquoi $chaine1 += $chaine2;
$chaine1 .=$chaine2;

echo $chaine1;
echo "</br>";


//数的应用
$n1 = 8;
$n2 = 5;

echo !($n1 == $n2);
echo "</br>";
echo $n1 != $n2;
echo "</br>";
echo $n1 = $n1+$n2;
echo "</br>";
echo $n1 += $n2;
echo "</br>";
echo $n1 .=$n2;
echo "</br>";

//条件语句
$pseudo = "Seb";

$privilege = "visiteur";

if($pseudo == "Seb" || $privilege == "admin"){
    echo "Bonjour Administrateur";
}else{
    echo "qu'est ce que c'est?";
};
//去掉花括号也可以运行
echo "</br>";

//Ternaire
$nombre = 8;
($nombre > 20) ? $nombre ++ : $nombre += 5;
echo $nombre;
echo "</br>";

switch($pseudo){
    case "seb": echo "Hey Seb";break;
    case "visiteur": echo "Hey Visitor";break;
    default: echo "Nani??";break;
}
echo "</br>";

// bouclessssssss

$num = 8;
$i=0;
while($i<$num){
    echo $i;
    $i ++;
};
echo "</br>";

for($i = 1; $i <= 5; $i ++){
    echo "trouve moi $i";
    echo "</br>";
};


//最常用的foreach
        // $articles = [
        //     [
        //     "id" => 1,
        //     "titre" => "article 1",
        //     "accroche" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate doloribus veritatis sint, ratione ipsa deserunt.",
        //     "publication" => "2021-01-19 11:30",
        //     "image" => "https://placeimg.com/640/480/people",
        //     ],
        //         [
        //     "id" => 2,
        //     "titre" => "article 2",
        //     "accroche" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate doloribus veritatis sint, ratione ipsa deserunt.Lorem ipsum dolor sit amet.",
        //     "publication" => "2021-01-19 11:31",
        //     "image" => "https://placeimg.com/640/480/people",
        //     ],
        //         [
        //     "id" => 3,
        //     "titre" => "article 3",
        //     "accroche" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate doloribus veritatis sint, ratione ipsa deseruntorem, ipsum dolor sit amet consectetur adipisicing..",
        //     "publication" => "2021-01-19 11:32",
        //     "image" => "https://placeimg.com/640/480/people",
        //     ],
        // ];

        // foreach($articles as $article){
        //     echo $article['titre'].'<br>';
        //     echo $article['publication'].'<br>';
        // };

// 加载页面
        // include "index.php";  
//在面对数据库时候，需要从数据库提取时候，用require而不是includ
// include_once只能召唤一次啊，之后如果再用include就不管用了，召唤不出来了。。。


// 最喜欢的函数哦

//empty函数

if (empty($_POST)){ //post是不是空的
    echo "formulaire non envoyer";
};

//inset() verifie la variable 存在不存在
        // if(isset($_SESSION["menbre"])){ 
        //     echo "vous etes connecte!";
        // }else{
        //     header("location: index-1.php");
        // };

 //unset() 函数用于销毁给定的变量
$nana = "coucou";
unset($nana);
echo $nana;

//检查邮箱地址是不是符合规范
$email = "contact@wrap-code.fr";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Adresse ok";
}else{
    echo "Adresse pas ok";
};
echo "</br>";

//显示时间的函数---还有一个叫carbon的php插件
$publication = date("Y-m-d H:i");

    echo $publication;
    echo "</br>";

//
print_r($articles);
echo "</br>";
echo "</br>";
echo "</br>";
//获取valeur
var_dump($articles);
///die;//没听明白
echo "</br>";

//super important   htmlentities
$commentaire = htmlentities("<script>alert('HAHAHAHAHAHA')</script>");
echo $commentaire;
echo "</br>";


//字符串长度
if(strlen($chaine1)>=10){
    echo "yes";
}else{
    echo "non";
};
echo "</br>";


//password_hash() 函数用于创建密码的散列（hash）
$password = "wesdlkj";
$password = password_hash($password,PASSWORD_DEFAULT);
echo $password;
echo "</br>";

if(password_verify('wesdlkj',$password)){
    echo "mot de pass ok";
}else{
    echo "non";
};

//mail

$destinataire = "ting.kc.56@gmail.com";
$sujet = "Test email avec PHP";
$message = "<h1>Just for test.</h1>";
$headers = "MINE-Version: 1.0"."\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From: Ting<ting.kc.56@gmail.com>";

mail($destinataire, $sujet, $message, $headers);
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


// 函数

$chaine3 = "variable global";
$chaine5 = "declaration super Global";
echo $GLOBALS['chaine5']; //创建自己的全局变量，很少用到
echo "</br>";

function sum($number1,$number2,$number3=null){
    global $chaine3;
    echo $chaine3;
    echo "</br>";
    $chiane4 = "variable local";
    $resultat = $number1 + $number2 +$number3;
    return $resultat;
};


$entier = 8;
$decimal = 5.2;
$entier2 = 6;

$sum = sum($entier,$decimal);
$sum2 = sum($entier,$decimal,$entier2);

echo $sum;
echo "</br>";
echo $sum2;
echo "</br>";
echo $chiane4;
echo "</br>";
echo $chaine3;
echo "</br>";


//base de donnee
    //创建新数据库操作
        // 在laragon创建一个新的bdd
        // 打开laragon界面上bdd里面的laragon接口，右键点击创建新的bdd，选择语言encodage utf8。这里一个armoire就创建好了
        // 创建新的抽屉table， 一个table就是一个属性，用来盛放不同的值
        // 选择器 SELECT id , titre, FROM  article  选择全部实体的table： id和titre
        // SELECT *(全部table) FROM  article WHERE id = 5 选择实体5的所有table
        // INSERT INTO 加入实体 INSERT INTO table_name /*可选插入列(列1, 列2,...)*/ VALUES (值1, 值2,....)
        // UPDATE 修改实体数据
        //删除一行 DELETE FROM articles WHERE id=8    删除好几行DELETE FROM articles WHERE id IN(6,7)    或者 DELETE FROM articles WHERE id BETWEEN 3 AND 5


//链接PHP和数据库操作
    // la class PDO

    $dsn = 'mysql:dbname=blog; host=localhost';
    $user = 'root';
    $passwordd = '';

    try{
            $bdd = new PDO($dsn, $user, $passwordd);
            echo "good";
    }catch(PDOException $e){
        echo "mistake" . $e -> getMessage();
    };
    echo "</br>";
    echo "</br>";
    echo "</br>";
    $articles = $bdd -> query("SELECT * FROM articles");

            // var_dump($articles->fetch()); //只提取一行
            // var_dump($articles->fetch()); //提取第二行
//提取全部，可以用一个boucle
    // while($article = $articles->fetch()){
    //     echo $article['titre'].'<br>';
    // };
    //也可以用fetchAll（）
    $articles = $articles -> fetchAll();

    foreach($articles as $article){
        echo $article['titre'].'<br>';
    };

//提取其中一个实列的一项
    $id = 5;
    $article = $bdd -> prepare("SELECT * FROM articles WHERE id=?");
    $article-> execute([$id]);

    $article = $article->fetch();
    echo $article['titre'];
    echo "</br>";

    

//时间的格式化

    $publication = "2021-01-20 09:54:20";
    $formatTime = date('l j F Y'.' à '.'H:m');
    echo $formatTime;
    echo "</br>";


//建立其他的table，然后用外键把三个table相连。例子里面有article表，commentaire表，users表，在commentaire表里面需要user和articles的外键，因为他需要这两个参数。











//如果文件中只有php，不用关balise