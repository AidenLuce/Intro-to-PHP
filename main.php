<!DOCTYPE html>
<html>
<head>
    <title>Intro to PHP</title>
</head>
<body>
<?php
    $num1 = 0; $num2 = 1;
    $counter = 0;
    echo "<h1>Fibonacci Sequence</h1><br>";

    while($counter<30){
        echo "$num1 <br>";
        $num3 = $num1 + $num2;
        $num1 =$num2;
        $num2= $num3;
        $counter++;
    }
    echo "<h1>FIZZBUZZ</h1>";
    for($int=1;$int<100;$int++){
        if($int%3==0&&$int%5==0){
            echo "FIZZBUZZ<br>";
        } else if($int%3==0){
            echo "fizz<br>";
        } else if ($int%5==0){
            echo "buzz<br>";
        } else{
            echo "$int<br>";
        }
    }

?>
</body>
</html>