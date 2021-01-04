<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>connecter</h1>
    <a href="../index.php">retour</a>
    <p><?php echo $_SESSION['toto']?></p>
    <p><?php echo $_SESSION['password']?></p>
</body>
</html>