<?php
$title ="page d'index";
$fruits =["pomme","poire","bannane"];

if (!isset($_GET["test"])) {
    echo "pa de parametre";?>
    <?php foreach($fruits as $fruit):?>
        <li><?php echo($fruit)?></li>
    <?php endforeach;
    $variable1 = null;
}else{
    $variable1 = $_GET["test"];
}

switch ($variable1) {
        case 1:
            $variable1 = $variable1;
            $content = "contenue".$variable1;
            break;
        case 2:
            $variable1 = $variable1;
            $content = "contenue".$variable1;
            break;
        case 3:
            $variable1 = $variable1;
            $content = "contenue".$variable1;
            break;
        
        default:
            $variable1 = "rien XDDD";
            $content = "parametre incorecte";
            break;
}


