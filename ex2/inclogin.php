<?php    
    function arrayBase(){
        $user = [
            "Renaud"=> password_hash("1701", PASSWORD_DEFAULT),
            "Alice"=> password_hash("1702", PASSWORD_DEFAULT),
        ];
    }
    function checktFichier(){
        if (!file_exists("user.json")) {
            arrayBase();
            $json = json_encode(arrayBase()); // json_encode :transforme le tableau en json/*
            file_put_contents("user.json", $json); // file_put_contents :ecrire dans un fichier 
        }
    }
    function getUser(){
        arrayBase();
        $json = json_encode(arrayBase()); // json_encode :transforme le tableau en json/*
        $json2 = file_get_contents("user.json");//file_get_contents :lie le fichier mit en parametre
        $user2 = json_decode($json2, true); // json_decode : decode le json en tableau
        var_dump($user2);
        return $user2;
    }

    if (isset($_POST["totoInscrip"]) && isset($_POST["passwordInscrip"])) {
        
        $totoInscrip = $_POST["totoInscrip"];
        $passwordInscrip = $_POST["passwordInscrip"];

        if (array_key_exists($totoInscrip,getUser()) ) {
            echo "compte existe deja";
        }else {
            $baseUsers = getUser();
            var_dump($baseUsers);
            $hash = password_hash($passwordInscrip,PASSWORD_DEFAULT);
            $baseUsers[$totoInscrip]=$hash;

            $json = json_encode($baseUsers);
            file_put_contents("user.json", $json);
            
            echo "eregistremer";
        }
    }else{
        $totoInscrip = null;
        $passwordInscrip = null; 
        var_dump(getUser());
    }

    if (!isset($_POST["toto"]) && !isset($_POST["password"])) {
        $toto =null;
        $password = null;
    }else{
        $toto = $_POST["toto"];
        $password = $_POST["password"];
        if (array_key_exists($toto,getUser()) ) {
            if (/*$password === $user[$toto]*/ password_verify($password, $user2[$toto])) {
                $_SESSION["toto"] = $toto;
                $_SESSION["password"] = $password;
                var_dump($_SESSION);
                header("Location:ex2/pageconecter.php");
            }else{
                echo "info incorect1";
            }
        }else {
            echo "info incorect";
        }
        /*if ($po = array_search($password, $user)) {
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
        }*/
    }
