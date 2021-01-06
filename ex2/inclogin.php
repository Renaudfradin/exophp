<?php    
    $user = [
        "Renaud"=>1701,
        "Alice"=>1702,
    ];
    var_dump($user);
    if (!isset($_POST["toto"]) && !isset($_POST["password"])) {
        $toto =null;
        $password = null;
    }else{
        $toto = $_POST["toto"];
        $password = $_POST["password"];
        
        if ($po = array_search($password, $user)) {
            if ($toto == $po) {
                // session_start();
                $_SESSION['toto'] = $toto;
                $_SESSION['password'] = $password;
                var_dump($_SESSION);
                header("Location:ex2/pageconecter.php");
            }else {
                echo "info incorect";
            }
        }else{
            echo "info incorect";
        }
    }