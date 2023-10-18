<?php

    $string = "Raghad Alahmadi";
    echo $string;

    echo "<br>";
    echo strtolower($string);

    echo "<br>";
    echo strtoupper($string);

    echo "<br>";
    echo strlen($string);

    echo "<br>";
    echo $string[0];

    echo "<br>";
    $string[7] = "n";
    echo $string;

    echo "<br>";
    echo str_replace("Raghad", "رغد", $string);

    echo "<br>";
    echo substr($string, 6);
?>