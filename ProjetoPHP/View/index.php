<?
    $content1 = file_get_contents("Arquivo/content1.txt");
    $content2 = file_get_contents("Arquivo/content2.txt");
    $content3 = file_get_contents("Arquivo/content3.txt");
    $dica1 = file_get_contents("Arquivo/dica1.txt");
    $dica2 = file_get_contents("Arquivo/dica2.txt");
    $noticia1 = file_get_contents("Arquivo/noticia1.txt");
    $noticia2 = file_get_contents("Arquivo/noticia2.txt");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head><title>ESCOLA DE C - Aprenda Linguagem C/C++</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
	<div id="geral">
	
        <div id="topo">
        
          <h1>Cursos e Apostilas em Linguagem C/C++</h1>
          <p> Socios Diretores & Instrutores: Julienne Pontes & Marcos Pereira<BR>
		      No. Mat.: 20112370246  -   No. Mat.: 20112370580</p>

          <div id="menu">
             <ul>
                <li><a href="sobre.php">CURSO </a></li>                                                                                
				<li><a href="contato.php">CONTATO </a></li>
                <li><a href="/ProjetoPHP/Model/Pesquisa.php">PESQUISA</a></li>                
				<li><a href="/ProjetoPHP/Model/index.php">CADASTRAR LIVROS</a></li>
                <li><a href="/ProjetoPHP/Model/comprar.php">COMPRAR APOSTILAS </a></li>
		     </ul>
          </div>   
        
        </div>
        
        <div id="livros">
             <h3> LIVROS </h3>
             <img src="Imagens/LIVRO1.JPG" alt="DENIS" weigth="60" heigth="60" />
			 <p><?=$content1?></p>

             <img src="Imagens/LIVRO2.JPG" alt="DENIS" weigth="60" heigth="60" />
			 <p><?=$content2?></p>

             <img src="Imagens/LIVRO3.JPG" alt="DENIS" weigth="60" heigth="60" />
             <p><?=$content3?> </p>

        </div>
        
        <div id="dicas">
             <h3> DICAS </h3>
			 <p><?=$dica1?></p>
             <p><?=$dica2?></p>
        </div>

        <div id="painel">
             <h3> NOTICIAS </h3>
             <img src="Imagens/DENIS.JPG" alt="DENIS" weigth="60" heigth="60" />
             <p><?=$noticia1?></p>

             <img src="Imagens/C++.JPG" alt="C++" weigth="60" heigth="60" />
             <p><?=$noticia2?></p>

        </div>

		<div id="rodape">
           <p>Copyright &copy; 2013 - Todos os direitos reservados a Julienne Pontes & Marcos Antonio</p>
        </div>
	</div>
</body>

</html>
