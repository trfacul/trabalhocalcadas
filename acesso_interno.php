<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../Processos.ico">

      <title>Calcada-Porto Alegre</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a>Calçadas Rebaixadas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Olá Fulano</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#">Cadastrar Calçadas</a></li>
  
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<form name='search'>
          <h2>Pesquisar o Endereço</h2><input type="text" class="form-control" placeholder="Search...">
		  <button name "pesq type="submit" class="btn btn-success">Pesquisar</button>
          </form>
		<h1 class="sub-header">Adicionar um novo endereço</h1>
		<form  action = "selecaoRuas.php" method = "POST"> 
		<table>    
              <thead>
			   <tr>
				<td>Endereço:</td> 
                <td><input type="text" name="nome_rua" maxlength="100" size="100" tabindex="8"></td>
			 </tr>
			 <tr>
			 <td> Nº:</td> 
			  <td> <input type="text" name="n" maxlength="10" size="10" tabindex="1"></td>
			</tr>
			<tr>
				<td> CEP:</td> 
	         <td> <input type="text" name="n" maxlength="10" size="10" tabindex="1"></td>
			 <td><button name "pesq type="submit" class="btn btn-success">Adicionar</button></td>
		</table>		
		</form>	
		 	
		   <table class="table table-striped">
		   
          <div class="table-responsive">
            <table class="table table-striped">
          <h2 class="page-header">Calçadas Rebaixadas Porto Alegre</h2>
          
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome da Rua</th>
                  <th>Cep</th>
                </tr>
              </thead>
			  <tbody>
			  <?php include("selecaoRuas.php");?>
			  </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
