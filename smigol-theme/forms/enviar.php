<?
$hoje_tmp = getdate();
$hoje = ($hoje_tmp[hours].":".$hoje_tmp[minutes].":".$hoje_tmp[seconds]);

$nome = utf8_decode($_POST["Nome"] ); //trata a variável nome
$telefone = utf8_decode($_POST["Telefone"] ); //trata a variável cidade
$email = utf8_decode( $_POST["Email"] ); //trata a variável e-mail
$assunto_mensagem = utf8_decode( $_POST["Assunto"] ); //trata a variável assunto
$mensagem = utf8_decode( $_POST["Mensagem"] ); //trata a variável mensagem
$exibir_apos_enviar = "http://www.smigol.com.br/site/";

global $email; //transforma em variavel global a variável e-mail

$enviou = mail("contato@smigol.com.br", // aqui voce coloca o seu e-mail
"$assunto_mensagem",
"Nome: $nome
Telefone: $telefone
Email: $email
Mensagem: $mensagem",
"From: $nome <$email>");

if ($enviou){
//echo "<b>$nome</b>, sua mensagem foi efetuada com sucesso.<br>Em breve lhe responderemos.";
echo "<script>window.location='$exibir_apos_enviar'</script>";
}

else {
echo "<b>$nome</b>, não foi possível enviar sua mensagem.<br>Tente novamente.";
}

?>