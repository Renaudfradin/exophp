<?php    
    $user = [
        "id"=>"1",
        "user"=>"Renaud",
        "mdp"=>1701,
        "id2"=>"2",
        "user2"=>"Alice",
        "mdp2"=>1702,
    ];
    var_dump($user);
    if (!isset($_POST["toto"]) && !isset($_POST["password"])) {
        $toto =null;
        $password = null;
    }else{
        $toto = $_POST["toto"];
        $password = $_POST["password"];
        if (in_array($toto, $user)&& in_array($password, $user)) {
           // session_start();
            $_SESSION['toto'] = $toto;
            $_SESSION['password'] = $password;
            var_dump($_SESSION);
            header("Location:ex2/pageconecter.php");
        }else{
            echo "info incorect";
        }
    }