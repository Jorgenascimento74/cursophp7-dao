<?php

require_once("config.php");

//Carrega um usuario.
//$silvia = new Usuario();
//$silvia->loadbyId(3);
//echo $silvia;

/*Carrega uma lista de usuarios.*/
//$lista = Usuario::getList();

//echo json_encode($lista);

/*carreaga uma lista de usuarios buscando pelo login */
//$search = Usuario::search("lu");

//echo json_encode($search);

/*Carregar um usua´rio usando o login e a senha*/
//$usuario = new Usuario();
//$usuario->login("Luiz", "1234567890");

//echo $usuario;

/* Criando um novo usuario
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/
/*
//Altera um usuario
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("analista", "barney33");

echo $usuario; */
$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo $usuario;



/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

?>