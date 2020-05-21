<?php

if(isset($_POST['telefone']) && !empty($_POST['telefone'])) {

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['teleone']);
$mensagem = addslashes($_POST['mensagem']);

$to = "im-senne@bol.com.br";
$subjet = "MENSAGEM - SITE ";
$body = "Nome: ".$nome. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Mensagem: ".$mensagem;

if(mail($to,$subjet,$body)){
    echo("Mensagem enviada com sucesso. Em pouco tempo entraremos em contato");
}else{
    echo("Mensagem não enviada. Colocou o nome e telefone corretamente ?");
}



}


?>