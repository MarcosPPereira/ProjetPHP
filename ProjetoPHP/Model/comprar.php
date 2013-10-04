<?

require_once('apostila.class.php');

$apostilas = array(
	1 => new Apostila(1,"Curso de C++","Livro de C++, contendo passo-a-passo da linguagem", "1995", 66.9,"23/09/199"),
	2 => new Apostila(2,"Linguagem C", "Livro da linguagem C, em um aspecto mais simples", "1979", 109.5,"25/02/1980"),
	3 => new Apostila(3,"C esquematizado","Curso de C esquematizado", "1999", 60.7,"03/06/2002"),
	4 => new Apostila(4,"C++","Curso de C++ esquematizado", "2000", 90.5,"15/12/2005"));

session_start();

if ( !isset( $_SESSION['total'] ) ) {
    $_SESSION['total'] = 0; 
    $_SESSION['preco'] = 0; 
}

if ( isset( $_GET['add'] ) ) {
    
    $apostila = $apostilas[$_GET['add']];
    
    $_SESSION['total']++;
    $_SESSION['preco'] += $apostila->getPrice();
  	$titulo = $apostila->getApostila();
  	$sinopse = $apostila->getSynopsis();
  	$ano = $apostila->getYear();
  	$preco = $apostila->getPrice();
  	$data = $apostila->getRegistryDate();


  	echo "Item adicionado: "."<br>"."Titulo: ".$titulo."<br>"."Sinopse: ".$sinopse."<br>"."Ano: ".$ano."<br>"."Preco: ".$preco."<br>"."Data de registro: ".$data;
		
  	 
}

?>


<html>

<head>
	<title>ESCOLA DE C - Aprenda Linguagem C</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta charset="UTF-8">
    

</head>
  <body>

	<div id="geral">
	
        <div id="topo">
        
          <h1>Cursos e Apostilas em Linguagem C/C++</h1>
          <p> Sócios Diretores & Instrutores: Julienne Pontes & Marcos Pereira<BR>
		      No. Mat.: 20112370246   -   No. Mat.: 20112370580</p>

		</div>      

		
			<? foreach ($apostilas as $apostila) { ?>

		<div class="apostila">
	    	<?= $apostila->getApostila() ?> <br>
	    	<?= $apostila->getSynopsis() ?> <br>
	    	<?= $apostila->getYear() ?> <br>
	    	<?= $apostila->getPrice() ?> <br>
	    	<?= $apostila->getRegistryDate() ?> <br>
	    	
	    
			<a href="comprar.php?add=<?= $apostila->getidApostila() ?>"> Adicionar ao Carrinho </a>
		</div><br>

	<? } ?>
	<div id="compras">
	Total de itens no carrinho: <?= $_SESSION['total']; ?>	<br>
	Preço total: <?= $_SESSION['preco']; ?></br>
	<br>
	

	</div>
						
		</div>	
	</div>	

  </body>
</html>