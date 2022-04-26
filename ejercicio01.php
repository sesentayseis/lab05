<!DOCTYPE html>
<html>
    <head>
        <title>
            Ejercicio 1
        </title>
</head>
<body>
    <form method="get" action="">
        Nombre: <br><input type="text" name="name"><br>
        Importe total vendido del mes <br><input type="text" name="imp"><br>
        Cantidad de hijos en edad escolar <br><input type="text" name="hij"><br>
        <br><input type="submit" value="Calcular" name="Calcular"><br>
</form>
<?php

$nombre=$_GET['name'];

$importe=$_GET['imp'];

$hijos =$_GET['hij'];
$contador=1;

    while ($contador < 2) {
        
        
            if(  empty($hijos) && empty($importe) ){
                echo "Ingresa bien los datos";
                $contador++;
            }
            else {
                
                $comision = 0.075 * $importe;
                $bonificacion = 50 * $hijos;
                $sueldo_bruto = 600 + $comision + $bonificacion;
                $descuento = 0.11 * $sueldo_bruto;
                $sueldo_neto = $sueldo_bruto - $descuento;
                echo $nombre." tu comision es : " .$comision ."<br>";
                echo $nombre." tu bonificacion es : " .$bonificacion."<br>";
                echo $nombre." tu sueldo bruto es : " .$sueldo_bruto."<br>";
                echo $nombre." tu descuento es : " .$descuento."<br>";
                echo $nombre." tu sueldo neto es : " .$sueldo_neto."<br>";
                $contador++;
            }
       
        }    
     
  
    
?>
</body>
    </html>