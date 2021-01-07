<?php
function getproduist(){
    $poduits = [];
    $getCSV = file_get_contents("./produist.csv");
    $line = strtok($getCSV, "\r\n");
    while ($line !== false) {
        $col = explode(";",$line);
        $poduits[] = $col;
        $line = strtok("\r\n");
    }
    var_dump($poduits);
    return $poduits;
}







