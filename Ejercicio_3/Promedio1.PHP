<?php
    $Vnombre=$_GET["nombre"];//Toma el valor del campo Nombre
    $NOIP=$_GET["NIP"];//Toma del campo NIP.
    $NOIIP=$_GET["NIIP"];//Toma del campo NIIP.
    $NOIIIP=$_GET["NIIIP"];//Toma del campo NIIIP.
    $NOIVP=$_GET["NIVP"];//Toma del campo NIVP.
    $Promedio=($NOIP+$NOIIP+$NOIIIP+$NOIVP)/4;

    echo "$Vnombre, tiene de promedio en el 10MO DE BTP INFO: $Promedio";
?>