<?php
// conecta ao banco de dados


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="calcadas_db"; // Database name 
$conexao = mysqli_connect ("localhost", "root", "", "calcadas_db");

$id= $_POST['id'];
$cademail= $_POST['cademail'];
$cadpassword= $_POST['cadpassword'];
$cadpssconf=  $_POST['cadpassconfirm'];
$cadlogin = $_POST['cadlogin'];


$cademail = trim($cademail);
$cadpassword = trim($cadpassword);
$cadpssconf = trim($cadpassconf);

if($cademail && $cadpassword && $cadpssconf && $cadlogin ){
	// cria a instrução SQL que vai selecionar os dados
	
	$resultado = mysqli_query(
		$conexao,
		"INSERT INTO dados_usuarios (id, email, nome, senha ) VALUES ($id,'$cademail', '$cadlogin',
	'$cadpassword')"
	
	);
	
	if ($resultado == false) {
	
		echo mysqli_error($conexao);
		
	}
	
	
	   
	
}else{
	
}




?>

