<?php 

require_once("config.php");


/* Chama apenas um usuário
$root = new Usuario();
$root->loadById(4);
echo $root;
*/ 

// carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

// carrega usuarios buscando pelo login
//$search = Usuario::search("daniel");
//echo json_encode($search);

// carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Daniel","123456");

echo $usuario;
?>
