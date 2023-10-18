<?php
    //Calculator
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];



    

    if (!empty($number1) && !empty($number2) && !empty($op)) {

            if($op === "+"){
                $result = $number1 +  $number2;
            }
            elseif ($op ==="-") {
                $result = $number1 -  $number2;
            }
            elseif ($op ==="*") {
                $result = $number1 *  $number2;
            }
            elseif ($op ==="/") {
                $result = $number1 /  $number2;
            }
        
    }
    
    
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">

        <form action="calc.php" mtheod="GET" class="form">


            <div>

                <label >Enter Number 1:</label>
                <input type="number" id="num1" name="number1" class="form-control">

            </div>

            <div>

                <label >Enter Number 2:</label>
                <input type="number" id="num2" name="number2" class="form-control">

            </div>
            <br>
            <div>
                <label >operation: </label>
                <input type="text" name="op" class="form-control">
            </div>
            <div class = "alert alert-success" >

                <?php

                    echo $result ;

                ?>
            </div>

            <br>

            <input type="submit" class="btn btn-primary">

        </form> 
    </div>
</body>