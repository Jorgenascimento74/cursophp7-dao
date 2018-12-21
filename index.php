<?php

require_once("config.php");

$silvia = new Usuario();
$silvia->loadbyId(3);

echo $silvia;




/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

?>