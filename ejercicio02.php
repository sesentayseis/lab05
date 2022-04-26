<!DOCTYPE html>
<html>
    <head>
        <title>
            Ejercicio 2
        </title>
</head>
<body>
    <form method="get" action="">
        Precio actual de la gaseosa <br><input type="text" name="precio"><br>
        ¿Cuantas gaseosas desea adquirir? <br><input type="text" name="unidad"><br>
        <br><input type="submit" value="Calcular"><br>
    </form>
<?php

$precio=$_GET['precio'];
$unidades =$_GET['unidad'];
$contador=1;
while ($contador < 2) {
        
        
    if(  empty($precio) && empty($unidades) ){
        echo "Ingresa bien los datos";
        $contador++;
    }
    else {
        $imp_com = $precio - (0.05 * $precio);
        $imp_des = 0.07 * $imp_com;
        $imp_pagar = $imp_com - $imp_des;
        $nuevo_precio = $imp_com - $imp_des;
        $obsequio = 2 * $unidades;
        echo "El importe de tu compra es : " .$imp_com ."<br>";
        echo "El importe del descuento es : " .$imp_des."<br>";
        echo "El importe a pagar es : " .$imp_pagar."<br>";
        echo "El nuevo precio es : " .$nuevo_precio."<br>";
        echo "Cantidad de chicles sabor maracuya como obsequio : " .$obsequio."<br>";
        $contador++;
    }
}   

?>
</body>
    </html>