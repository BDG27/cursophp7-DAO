<?php

require_once("config.php");

$sql = new Sql();

$user = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($user);

?>