<?php
include "class/sql.php";
include "class/gato.php";

$tipo = isset($_GET["tipo"])?$_GET["tipo"] : "";
$g = new gato();
//procesos.php?tipo=1&nom=redo
if($tipo == 1)
{
    //crear jugador 1
    $nom = isset($_GET["nom"])?$_GET["nom"] : "";
    
    echo $g->crearJugador1($nom);
}
//procesos.php?tipo=2&nom=redo&id=2
else if($tipo == 2)
{
    
    // crear jugador 2
    $id = isset($_GET["id"])?$_GET["id"] : "";
    $nom = isset($_GET["nom"])?$_GET["nom"] : "";

    $g->crearJugador2($id ,$nom );
}
//procesos.php?tipo=3&id=2&nom=&valor=x&index=0
else if($tipo == 3)
{
    // quien va a tirar
    $id = isset($_GET["id"])?$_GET["id"] : "";
    $nom = isset($_GET["nom"])?$_GET["nom"] : "";
    $valor = isset($_GET["valor"])?$_GET["valor"] : "";
    $index = isset($_GET["index"])?$_GET["index"] : "";

    $g->tiro($id, $nom, $valor, $index);
}
else if($tipo == 4)
{
    //procesos.php?tipo=4&id=2&nom=&valor=x&index=0
    $id = isset($_GET["id"])?$_GET["id"] : "";
    //muestra partida
    echo $g->mostrar($id);
}
else if($tipo == 5){
    //procesos.php?tipo=4&id=2&nom=&valor=x&index=0
    //$id = isset($_GET["id"])?$_GET["id"] : "";
    //muestra partida
    echo $g->listarPartidas();
}
