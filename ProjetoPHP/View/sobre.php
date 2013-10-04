<?    
  $roteiro1 = file_get_contents("Arquivo/roteiro1.txt");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>


<head><title>ESCOLA DE C - Aprenda Linguagem C</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div id="geral">
	
        <div id="topo">

          <h1>Cursos e Apostilas em Linguagem C/C++</h1>
          <p> Socios Diretores & Instrutores: Julienne Pontes & Marcos Pereira<BR>
              No. Mat.: 20112370246   -   No. Mat.: 20112370580</p>
        </div>
		
        <div id="sobre">
		
		  <pre>
              <h3>Roteiro sobre Curso Linguagem em C</h3>
              <p><?=$roteiro1?></p>
   	      </pre>
		
		</div>

        <div id="rodape">
             <p>Copyright &copy; 2013 - Todos os direitos reservados a Julienne Pontes & Marcos Antonio</p>
		</div>
	</div>
</body>

</html>