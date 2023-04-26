<!DOCTYPE html>
<html>
<head>
    <title>Intro to PHP</title>
</head>
<body>
<?php
$num1 = 0; $num2 = 1;
$counter = 0;
echo "Fibonacci Sequence<br>";

while($counter<10){
    echo "$num1 <br>";
    $num3 = $num1 + $num2;
    $num1 =$num2;
    $num2= $num3;
    $counter++;
}
?>
</body>
</html>