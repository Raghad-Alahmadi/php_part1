<form action="form.php" method="POST">

    First Name: <input type="text" name="fname">
    <br>
    Last Name: <input type="text" name="lname">
    <br>
    <input type="submit">
</form>


<?php

    echo $_REQUEST["fname"];
    echo $_REQUEST["lname"];


?>