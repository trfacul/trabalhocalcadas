<?
include ("conecta_banco.php");

$cademail= $_POST['cademail'];
$cadpassword= $_POST['cadpassword'];
$cadpssconf=  $_POST['cadpassconfirm'];

$cademail = trim($cademail);
$cadpassword = trim($cadpassword);
$cadpssconf = trim($cadpassconf);

if((strlen($cademail) == 0) && (strlen($cadpassword) == 0) ){
		$valida = false;
       
}
 if((strlen($cademail) <> "") && (strlen($cadpassword) <> "") ){	
 		$valida = false;
        
}

if((strlen($cadpssconf) <> "") && (strlen($cadpassword) <> "") ){	
 		$valida = false;
      
}

if((strlen($cadpssconf) == 0 ) && (strlen($cadpassword) ==0) ){	
 		$valida = false;
        
}

if(((strlen($cadpssconf)) == (strlen($cadpassword))){	
 		$valida = false;
         
}
	if ($valida === false) {
    echo "Error";
}

// conecta ao banco de dados
////$con = mysqli_connect($host, $username, $password, $db_name ) //or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
//mysqli_select_db($db_name, $con);
// cria a instrução SQL que vai selecionar os dados
$query = $resultado = mysqli_query ($conexao ,"INSERT INTO clientes (email , nome, senha ) VALUES ('$cademail',
'$cadpassword', '$cadpassword')");
// executa a query
$dados = mysqli_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>

