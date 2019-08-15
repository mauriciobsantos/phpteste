<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variaveis php</title>
</head>
<body>
    <?php 
        $idade = 31;
        $nome = "Mauricio";
        echo "$nome tem $idade anos";
    ?>
        <br><s></s>
    <?php 
    $n1 =3;
    $n2 = 2;
    $s = $n1 + $n2;
    echo "A soma entre $n1 e $n2 é igual a $s";
    ?>
<br>
    <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2> Valores recebidos: $n1 e $n2</h2>";
        $m =( $n1 +$n2) / 2;
        echo "A soma vale ". ($n1+$n2);
        echo "<br/>A subtracao vale ". ($n1-$n2);
        echo "<br/>A multiplcacao vale ". ($n1*$n2);
        echo "<br/>A divisao vale ". ($n1/$n2);
        echo "<br/>A modulo vale ". ($n1%$n2);
        echo "<br/>A media vale $m";
    ?>
    
</body>
</html>