<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Loop

    //While loop
    
    $x = 1;
    while ($x < 5) {
        echo "hi there<br>";
        $x++;
    }
    
    //Do while loop
    $x = 1;
    do{ echo "hi there<br>";
        $x++;

    }
    while ($x < 5);

    //For loop
    for ($x = 0; $x <= 10; $x++) {
        echo "hi<br>";
    }

    //Foreach loop
    $array = array("Daniel", "Jane", "Jacob", "Libby");

    foreach ($array as $loopdata) {
        echo "My name is ".$loopdata."<br>";
    }

?>
</body>
</html>