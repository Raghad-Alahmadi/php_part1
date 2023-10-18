<h1>ARRAYS</h1>

<form action="array.php" method ="GET">

    <input type="text" name="name">
    <input type="submit">
</form>
<?php

    $xname = $_GET["name"];


    //$family = array("Father", "Mother", "Brother");
    //$family = ["Nour", "Anas", "Majed"];

    $score = [
        "Nour" => [
            "Score:" => "90", 
            "Grade:" => "A"
        ],
        "Majed" => [
            "Score:" => "80", 
            "Grade:" => "C"
        ],
        "Anas" => [
            "Score:" => "40", 
            "Grade:" => "F"
        ],
    ];

    echo "Score: " . $score[$name]["Score"];
    echo "<br> ";
    echo "Grade: " . $score[$name]["Grade"];


   // echo $family["Gamer"];

    //echo count($family);

/*
   $family = [
        "Nour" => "90",
        "Majed" => "80",
        "Anas" => "40"
    ];
    */
?>