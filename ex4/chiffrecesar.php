<?php
function cipher($text, $pad = 3) {
        $result = "";
        if($text) {
            $min = range('a', 'z');
            $maj = range('A', 'Z');
            
            $splitted = str_split($text);
            foreach($splitted as $char) {
                if(in_array($char, $min)) {
                    // C'est une minuscule, on fait +3
                    $indexChar = array_search($char, $min);
                    $newChar = $min[($indexChar + $pad) % count($min)];
                    $result = $result . $newChar;
                } else if(in_array($char, $maj)) {
                    // C'est une majuscule, on fait +3
                    $indexChar = array_search($char, $maj);
                    $newChar = $maj[($indexChar + $pad) % count($maj)];
                    $result = $result . $newChar;
                } else {
                    // C'est un caractère spécial
                    // Pas toucher
                    $result = $result . $char;
                }
            }
        }
        return $result;
    }