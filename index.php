<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão não mostrar nada  */
$idade = 20;
if($idade >= 18){
    echo "Pode dirigir <br><br>";
}

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão não mostrar a mensagem "menor de idade"  */
 
$idade = 15 ;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    echo "Menor de idade<br><br>";
}

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão verificar se a idade é maior ou igual à 90 anos, se for, mostrar a mensagem "já passou do tempo, não pode mais dirigir", senão mostrar "menor de idade"  */
 
$idade = 15;
if($idade >= 90){
    echo "Já passou do tempo, não pode mais dirigir";
}else if($idade >= 18){
    echo "Pode dirigir";
}else{
    echo "Menor de idade<br><br>";
}

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão mostrar "menor de idade" e a quantidade de anos que falta para a pessoa ser maior de idade */
$idade = 10;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos<br> <br>";
}

/*PROBLEMA: exiba os números de 0 à 20*/

$contador = 0;
while ($contador<=20){
    echo $contador. "<br>";
    $contador= $contador +1 ;
    
}

/*PROBLEMA: exiba os números de 10 à 0*/
$contador = 10;
while ($contador >= 0) {
    echo "$contador <br>";
     $contador--;
    }

    for ($i = 0; $i <=10; $i ++){
        print "$i <br>";
    }
####  ARRAY ###
    //$fruta01= '🍓';
    //$fruta02= '🍇';
   // $fruta03='🥥';

//$frutas= array();
//$frutas[0] = '🍓';
//$frutas[1] = '🍇';
//$frutas[2] = '🥥';


$frutas=["🍓", "🍇","🥥"];
$frutas[3]= "🍍";
array_push($frutas, "🍒"); //adicionar no final do array

    echo "<h1> salada de fruta</h1>";

$qtd = count($frutas);
$contador =0;

while($contador < $qtd ){
    echo "$contador";
    echo "fruta: $frutas[$contador] <br>";
    $contador++;
} 


    ?>
</body>

</html>