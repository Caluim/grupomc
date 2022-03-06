<?php
//VARIÁVEIS
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/y');
$hora_envio = date('H:i:s');
//COMPOSIÇÃO DO EMAIL
$arquivo = "
    <html>
        <p><b>Nome: </b>$nome</p>
        <p><b>Email: </b>$email</p>
        <p><b>Mensagem: </b>$mensagem</p>
        <p>Este email foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>";
//EMAIL DE DESTINO FORMULÁRIO
$destino = "diogocarreira2015@gmail.com";
$assunto = "Contacto pelo site";
//PARA GARANTIR A EXIBIÇÃO CORRECTA DOS CARACTERES
$headers = "MIME-Version: 1.0\n";
$headers .= "content-type: text/html; charset-iso-8859-1\n";
$headers .= "From: $nome <$email>";
//ENVIO
mail($destino, $assunto, $arquivo, $headers);
echo "<meta http-equiv-'refresh' content-'10;URL-../contacto.html";
?>