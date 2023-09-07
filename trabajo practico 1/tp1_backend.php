<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo ("hola mundo") ;
$saludo = "<p> HOLA MUNDO </p> ";
echo $saludo ;
$numero1 = 20;
$numero2 = 15;
$suma = $numero1+$numero2;
$resta = $numero1-$numero2;
$multi = $numero1*$numero2;
$divi = $numero1/$numero2;
$divi2 = $numero1%$numero2;

echo "<p>$numero1 + $numero2 = $suma
$numero1 - $numero2 = $resta
$numero1 * $numero2 = $multi
$numero1 / $numero2 = $divi
$numero1 % $numero2 = $divi2</p>";

$celsius = 20;
$fahrenheit = ($celsius * 9/5) + 32;
echo "$celsius grados Celsius son: $fahrenheit grados Fahrenheit.";

$base = 18;
$altura = 12;
$perimetro_rectangulo = 2*($base+$altura);
$area_rectangulo = $base*$altura;

echo "<p> a) Rectangulo con base de $base cm, altura de $altura cm, perimetro $perimetro_rectangulo
cm y area de $area_rectangulo cm </p>";

$radio = 30;
$pi = 3.14159265359;
$perimetro_circulo = 2*$pi*$radio;
$area_circulo = $pi*pow($radio,2);

echo "<p> b) circulo con radio de $radio cm, perimetro de $perimetro_circulo cm
y area de $area_circulo cm </p>"
?>
</body>
</html>