<?php

include_once "Connection/connection.php";

date_default_timezone_set('America/Santo_Domingo');

$nombre = $_POST['nombre'];
$fecha = date('y/m/d h:i:s a', time());
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

$query_insert = $bd->prepare("insert into contacto(fecha, correo, nombre, asunto, comentario)values(?, ?, ?, ?, ?);");

$result = $query_insert->execute([$fecha, $correo, $nombre, $asunto, $comentario]);

?>