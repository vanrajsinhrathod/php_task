<!DOCTYPE html>
<html>
<head>
    <title>Loop</title>
</head>
<body>

    <h2>Loops</h2>
    <?php
    

    // while loop explain
    echo "<h3>While => Increment</h3><br>";
    // increment
    // here "$uv" is a variable
    $uv = 1;
    while($uv <= 10)
    {
        echo "Number is : $uv <br>";
        $uv++;
    }

    // decrement
    echo "<h3>While => Decrement</h3><br>";
    $xv = 10;
    while($xv >= 1)
    {
        echo "Number is : $xv <br>";
        $xv--;
    }

    // do...while loop explain
    echo "<h3>Do...While Loop</h3><br>";
    // increment
    $cv = 1;
    do {
        echo "Number is : $cv <br>";
        $cv++;
    }
    while($cv <= 10);

    // for loop

    echo "<h3>For Loop</h3> <br>";
    // increment
    echo "<h4>Increment For loop</h4> <br>";

    for($x=0; $x <= 10; $x++)
    {
        echo "Number is : $x <br>";
    }

    // Decrement
    echo "<h4>Decrement for loop</h4> <br>";
    for($x=10; $x >= 1; $x--){
        echo "Number is : $x <br>";
    }

    // foreach loop

    echo "<h3>foreach Loop</h3> <br>";
    $colors = array ("red","green","blue","gray","yellow","silver");
    foreach($colors as $value){
        echo "$value <br>";
    }

    // switch statement

    echo "<h3>Switch Statement</h3>";
    $variable="10";
    switch ($variable) {
        case '10':
            echo "Number is 10 <br>";
            break;

        case '12':
            echo "Number is 12 <br>";
            break;
        
        default:
            echo "Number is any";
            break;
    }
    ?>

    <?php
    // phpinfo();
    ?>
<form method='POST'>
    <h2>Please input your name:</h2>
    <input type="text" name="name">
    <input type="submit" value="Submit Name">
</form>
<?php
//Retrieve name from query string and store to a local variable
    if (isset($_POST['name'])) 
    {
        $name = $_POST['name'];
        echo "<h3> Hello $name </h3>";
    }
?>

</body>
</html>