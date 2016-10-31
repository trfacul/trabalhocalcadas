<?php

$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="calcadas_db"; // Database name 
$con = mysqli_connect($host, $username, $password, $db_name); 

$user;
$email_login = $_POST['email'];
$password_login = $_POST['pass'];

if(((strlen($email_login) == '') && (strlen($password_login) == '')) ){
        header('Location: index.html');
$valida = false;
}

if (((strlen($email_login) <> "") && (strlen($password_login) <> ""))){
         print("<a href='index.html'> Os campos email e senha sao obrigatorios. CLICK na mensagem para voltar.</a> ");
$valida = false;
}
if($valida == false) {
    echo "Error";
}

// conecta ao banco de dados

// seleciona a base de dados em que vamos trabalhar
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM `dados_usuarios` WHERE email=\"$email_login\" AND senha=\"$password_login\"AND nome=\"$user\"");

//SELECT * FROM `dados_usuarios` WHERE email="$email_login" AND senha="$password_login";
// executa a query
$dados = mysqli_query($con, $query);
if ($dados == false) {
	
		echo mysqli_error($con);
		
	}
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

session_start () ;
if ( isset ( $_SESSION [' email ']) ) {
echo " Olá  voce logou" . $_SESSION [' email '];
}

header('Location:acesso_interno.php');
?>

