<?
	require_once "apostilaCrud.class.php";
	$apostilaCrud = new ApostilaCRUD();
	extract($_GET);
	if(isset($submit)){
		// Insert into db
		$apostila = new Apostila($idApostila, $apostila, $synopse, $year, $price, null);
		$apostilaCrud->create($apostila);
		// Redirect to index.php
		header("Location: apostila.php");
	}
?>
<!doctype html>
<html lang="en">
<head><title>ESCOLA DE C - Aprenda Linguagem C/C++</title>
	<meta charset="UTF-8">
	<title>Apostilas</title>
    <link rel="stylesheet" href="/ProjetoPHP/View/style.css" type="text/css">
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
	<div id="geral">
	
        <div id="topo">
        
          <h1>Cursos e Apostilas em Linguagem C/C++</h1>
          <p> Sócios Diretores & Instrutores: Julienne Pontes & Marcos Pereira<BR>
		      No. Mat.: 20112370246   -   No. Mat.: 20112370580</p>

		</div>      


		<div id="content">
			<h1>Cadastrar Livros</h1>
			<form action="">
				<fieldset>
					<legend>Cadastro</legend>
					<input type="text" name="apostila" placeholder="Título">
					<textarea name="synopse" placeholder="Sinopse"></textarea>	
					<input type="number" name="year" placeholder="Ano">
					<input type="number" name="price" placeholder="Preço">
					<input type="submit" name="submit" value="Cadastrar">
				</fieldset>
			</form>
		</div>
	</div>	
</body>
</html>