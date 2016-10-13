<?

$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dados_usuarios"; // Database name 
$mysqli = new mysqli('localhost', 'root', '', 'dados_usuarios');

if((strlen($email_login) == 0) && (strlen($password_login) == 0) ){
		$valida = false;
        print("<a href='index.html'>Os campos email e senha sao obrigatorios. CLICK na mensagem para voltar.</a> ");
}
 if((strlen($email_login) <> "") && (strlen($password_login) <> "") ){	
 		$valida = false;
         print("<a href='index.html'> Os campos email e senha sao obrigatorios. CLICK na mensagem para voltar.</a> ");
}

	if ($valida === false) {
    echo "Error";
}


// conecta ao banco de dados
$con = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db_name, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT email, senha FROM dados_usuarios");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

