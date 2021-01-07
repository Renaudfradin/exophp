<?php session_start();?>
<?php require("ex1/inc.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($title)?></title>
</head>
<body>
     <!-- EXO1 -->
    <h1><?php echo($title)?></h1>
    <p><?php echo("hello world");?></p>
    <h1><?php echo $variable1 ?></h1>
    <p><?php echo $content ?></p>

    <!-- EXO2 -->
    <br><br><br><br><br><br>
    <h2>form connexion</h2>
    <a href="ex2/delog.php">delog</a>
    <form action="" method="POST">
        <input type="text" name="toto">
        <input type="text" name="password">
        <input type="submit" value="envoyer">
    </form>
    <form action="" method="POST">
        <input type="text" name="totoInscrip">
        <input type="text" name="passwordInscrip">
        <input type="submit" value="inscription">
    </form>
    <?php require("ex2/inclogin.php");?>

    <?php 
    if (!isset($_SESSION['toto']) && !isset($_SESSION['password'])) :
        
    else :?>
        <p><?= $_SESSION['toto']?></p>
        <p><?= $_SESSION['password']?></p>
    <?php endif ?>

    <!-- EXO3 -->
    <br><br><br><br><br><br>
    <?php 
    $langue = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    var_dump($langue);
    $lang ="fr";
    if (strpos($langue, "en")===0) {
        require("ex3/en.php");
    }else {
        require("ex3/fr.php");
    }
    function __($key){
        global $text;
        return $text[$key] ?? "default";
    }
    ?>
    <p><?= __("title")?></p>
    <p><?= __("subtitle")?></p>


    <!-- EXO4 -->
    <?php
    require("ex4/chiffrecesar.php");
    $text = $_POST["text"] ?? null;
    $result = cipher($text);
    ?>
    <form method="POST">
            <input required type="text" name="text"/>
            <input type="submit" value="Chiffrer"/>
        </form>
    <p><?= $result ?></p>
    
    <!-- EXO6 -->
    <?php
    require("ex6/get.php");
    ?>
    
    <?= $getCSV ?>

</body>
</html>
