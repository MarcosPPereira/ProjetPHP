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
          <p> Socios Diretores & Instrutores: Julienne Pontes & Marcos Pereira<BR>
		      No. Mat.: 20112370246  -   No. Mat.: 20112370580</p>

		</div>      

		<div id="contato">
		
		   <form name="envia_mail" action="sendEmail.php" method="POST">
		   
		   <fieldset>
		   
		   <legend>Fale Conosco</legend>
		   
		     <ul>
			   <li>
		         <label for="nome    ">Nome:</label>
			     <input type="text" id="nome" />
			   </li> 
			  
		       <li>
  			     <label for="assunto">Assunto:</label>
 			     <input type="text" id="assunto" />
			   </li>	 
			   
   		       <li>
  			     <label for="telefone">Telefone:</label>
 			     <input type="text" id="telefone" />
			   </li>	 

			   <li>
		         <label for="email   ">E-mail:</label>
			     <input type="text" id="email" />
			   </li> 
			   
			   <li>
		         <label for="mensagem">Mensagem:</label>
			     <textarea id="mensagem" rows="6" cols="28"></textarea>
			   </li>	 
			 </ul>  

			<button onclick="location.href='sendEmail.php'">Enviar</button>	
			 
            </fieldset>

			</form>

		</div>

	</div>

</body>

</html>