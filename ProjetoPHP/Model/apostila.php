<?
	require_once "apostilaCrud.class.php";
	$apostilaCrud = new ApostilaCRUD();
	$apostilas = $apostilaCrud->readAll();

	function formatDate($date){
		$date = explode("-", $date);
		$date = array_reverse($date);
		return implode("/", $date);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

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

		<div id="setoraposta">

			<section id="secao">

			<table id="tabapostila" border=2 width="100%" height="50px">

				<thead id="titulos">

					<tr width="100%" height="30%">
					<th></th>
					<th>ID</th>
					<th>Título</th>
					<th>Sinopse</th>
					<th>Ano</th>
					<th>Preço</th>
					<th>Registro</th>
					<th></th>
					<th></th>
					</tr>
				</thead>

				<tbody id="lacos">

				<?foreach ($apostilas as $id=>$apostila) {?>
					<tr>
						<td class="number" width="200px"></td>
						<td><?=$apostila->getIdApostila()?></td>
						<td><?=$apostila->getApostila()?></td>
						<td><?=$apostila->getSynopsis()?></td>
						<td><?=$apostila->getYear()?></td>
						<td><?=$apostila->getPrice()?></td>
						<td><?=formatDate($apostila->getRegistryDate())?></td>
						<td><a href="delete.php?userId=<?=$apostila->getIdApostila()?>">Remover</a></td>
					</tr>
					<?}?>
				</tbody>

			</table>

			<button onclick="location.href='create.php'">Cadastrar</button>
            <button onclick="location.href='/ProjetoPHP/Model/index.php'">Voltar</button>	
			</section>

		</div>
		
	</div>		

</body>

</html>