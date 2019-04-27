<?php

require_once("config.php");

// Carrega um usuário
//$user = new Usuario();
//$user->loadById(1);
//echo $user;

// Carrega uma list de usuário
//$list = Usuario::getList();
//echo json_encode($list);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("br");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
//$login = new Usuario();
//$login->login("Bruno", "456789");
//echo $login;

// Criando um novo usuário
//$newUser = new Usuario("Iron Man", "!@#$");
//$newUser->insert();
//echo $newUser;

// Alterando dados do usuário
//$updateUser = new Usuario();
//$updateUser->loadById(11);
//$updateUser->update("Beta", "1597534682");
//echo $updateUser;

//
$deleteUser = new Usuario();

$deleteUser->loadById(9);

$deleteUser->delete();

echo $deleteUser;

?>