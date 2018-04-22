<?php

require_once("config.php");

//$sql=new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);



//$root = new Usuario();
//carrega 1 usuario
//$root->loadById(3);

//$lista = Usuario::getList();

//$busca = Usuario::search("t");
//echo json_encode($busca);

$usuario = new Usuario();
//$usuario->login("root","!@#$%");

//$usuario->setDeslogin("aluno");
//$usuario->setDessenha("senha1");

//$usuario->insert();

//$usuario->loadById(7);
//$usuario->update("teste","teste2");

$usuario->loadById(7);
$usuario->delete();
echo $usuario;

 ?>
