<?php

function km2mi($quilometros,$total=0,$milhas=1.609){
    static $total;
    static $milhas;
    $total = $quilometros/$milhas;
    return $total;
}

echo ('percorreu '. km2mi(100). ' milhas');
?>