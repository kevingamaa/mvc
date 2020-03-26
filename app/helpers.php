<?php


function dd(...$vars) {
   
    echo "<div style='background: #000; color: green; padding: 20px'>";
    foreach($vars as $var) {
        if(is_array($var) || is_object($var)) {
            echo "<pre>";
                print_r($var);
            echo "</pre>";
        }

        if(is_string($var) || is_bool($var) || is_numeric($var)) {
            echo $var;
        }

    }
    echo "</div>";
    die();
}