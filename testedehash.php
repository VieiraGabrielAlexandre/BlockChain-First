<?php
    $lista1 = ["aaa","b","c"];
    $lista2 = ["a","b","c"];

    echo "Lista 1: ".md5(serialize($lista1));
    echo "<br>";
    echo "Lista 2: ".md5(serialize($lista2));
?>