	<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="calcadas_db"; // Database name 
	$conexao = mysqli_connect ("localhost", "root", "", "calcadas_db");

	$id       = $_POST['id'];
	$nome_rua = $_POST['nome_rua'];
	$numero   = $_POST['numero'  ];
	$cep_rua  = $_POST['cep_rua' ];


	if($nome_rua && $numero && $cep_rua){	
		$resultado = mysqli_query(
			$conexao,
			"INSERT INTO add_calcadas (id, nome, numero, cep ) VALUES ('id','$nome_rua', '$numero',
		'$cep_rua')"
		
		);

	if ($resultado == false) {
		
			echo mysqli_error($conexao);
			
		}
	}
	header('Location:cadastra_rua.php');

	?>
			