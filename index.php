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
    <a href="ex2/delog.php">delog</a>
    <h1><?php echo($title)?></h1>
    <p><?php echo("hello world");?></p>
    <h1><?php echo $variable1 ?></h1>
    <p><?php echo $content ?></p>
    <h2>form connexion</h2>
    
    <form action="" method="POST">
        <input type="text" name="toto">
        <input type="text" name="password">
        <input type="submit" value="envoyer">
    </form>
    <?php require("ex2/inclogin.php");?>
    <?php 
    if (!isset($_SESSION['toto']) && !isset($_SESSION['password'])) :
        
    else :?>
        <p><?php echo $_SESSION['toto']?></p>
        <p><?php echo $_SESSION['password']?></p>
    <?php endif ?>
    

</body>
</html>
