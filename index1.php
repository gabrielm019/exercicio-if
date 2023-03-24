<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=?, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$animais=["🐟", "🐴","🐶","🐻","🐷","🐘","🐳"];
$show = count ($animais);
$i = 0;

print "<h1> Animais: </h1>";

while ($i < $show){

    print  "$i";
    print "  $animais[$i]  <br>";
    $i++;
}


?>

</body>
</html>