<?php    
    $id = 1;
    $user = "Renaud";
    $mdp = "1701";
    if (!isset($_POST["toto"]) && !isset($_POST["password"])) {
        $toto =null;
        $password = null;
    }else{
        $toto = $_POST["toto"];
        $password = $_POST["password"];
        if ($toto == $user && $password == $mdp) {
           // session_start();
            $_SESSION['toto'] = $toto;
            $_SESSION['password'] = $password;
            var_dump($_SESSION);
            header("Location:ex2/pageconecter.php");
        }else{
            echo "info incorect";
        }
    }