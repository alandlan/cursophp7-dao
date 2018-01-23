<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*//Carrega um usuario
$root = new Usuario();
$root->loadByid(3);
echo $root;
*/

//Carrega uma lista
//$lista = Usuario::getList();
//echo json_encode($lista); 

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("e");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("eu", "654321");

echo $usuario;


 ?>}
