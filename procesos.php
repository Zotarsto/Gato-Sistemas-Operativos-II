<?php

include "class/gato.php" ;
$tipo = isset ($_GET['tipo']) ?$_GET["tipo"]:"";
if($tipo==1){
    //Crea jugador1
    $nombre = isset ($_GET['nombre']) ?$_GET["nombre"]:"";
}
else if($tipo==2){
    //Crea jugador2
    $nombre = isset ($_GET['nombre']) ?$_GET["nombre"]:"";
}else if($tipo==3){
    //Quien va tirar
}else if($tipo==4){
    //muestra partida
}

