<?php

$id_eliminar=$_REQUEST['id'];


echo "$id_eliminar";
include 'conexion1.php';
$query="DELETE FROM ejemplo where id=$id_eliminar";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principal.php"</script>';
?>