<?php

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$mensagem = $_POST['mensagem'];

$corpo  = "Nome: ".$nome."<BR>\n";
$corpo .= "Email: ".$email."<BR>\n";
$corpo .= "Mensagem: ".$mensagem."<BR>\n";

if(mail("socram107@gmail.com","Assunto",$corpo)){
  echo("email enviado com sucesso");
} else {
  echo("Erro ao enviar e-mail");
}

?>

