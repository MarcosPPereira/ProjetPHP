<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head><title>ESCOLA DE C - Aprenda Linguagem C/C++</title>
    <meta charset="UTF-8">
    <title>Apostilas</title>
    <link rel="stylesheet" href="/ProjetoPHP/View/style.css" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script>
        function CriaRequest() {
            try{
            request = new XMLHttpRequest();        
            }catch (IEAtual){
         
            try{
                 request = new ActiveXObject("Msxml2.XMLHTTP");       
             }catch(IEAntigo){
         
                 try{
                     request = new ActiveXObject("Microsoft.XMLHTTP");          
                 }catch(falha){
                     request = false;
                 }
             }
        }
     
        if (!request) 
            alert("Seu Navegador não suporta Ajax!");
        else
            return request;
        }
 
        function getDados() {
            var nome   = document.getElementById("txtnome").value;
            var result = document.getElementById("Resultado");
            var xmlreq = CriaRequest();
     
            xmlreq.open("GET", "Contato.php?txtnome=" + nome, true);
            xmlreq.onreadystatechange = function(){
            if (xmlreq.readyState == 4) {
                 if (xmlreq.status == 200) {
                     result.innerHTML = xmlreq.responseText;
                 }else{
                     result.innerHTML = "Erro: " + xmlreq.statusText;
                    }
                }
            };
            xmlreq.send(null);
            }
        </script>
</head>

<body>

    <div id="geral">
    
        <div id="topo">
          <h1>Cursos e Apostilas em Linguagem C/C++</h1>
          <p> Sócios Diretores & Instrutores: Julienne Pontes & Marcos Pereira<BR>
              No. Mat.: 20112370246   -   No. Mat.: 20112370580</p>
        </div>      

        <div id="Container">
            <hr/>
            <h2>Pesquisar Apostila:</h2>
            <div id="Pesquisar">
                Infome o nome: 
                <input type="text" name="txtnome" id="txtnome"/> 
                <input type="button" name="btnPesquisar" value="Pesquisar" onclick="getDados();"/>
                <button onclick="location.href='/ProjetoPHP/View/index.php'">Voltar</button>   
            </div>
            <hr/>

            <h2>Resultados da pesquisa:</h2>
            <div id="Resultado"></div>
            <hr>

        </div>
    </div>   
</body>
</html>
