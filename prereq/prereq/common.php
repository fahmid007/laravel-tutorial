<?php

    require "bank.php";
    class Bar{
        use Bank;
    }

    $obj = new Bar;
    $obj->abc();
    echo "</br>";
    echo "<hr>";
    $obj->efg();
    echo "<hr>";

?>