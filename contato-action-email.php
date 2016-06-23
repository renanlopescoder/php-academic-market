<?php
require_once("PHPMailerAutoload.php");
session_start();
//Instanciando o PHPMailer
$mail = new PHPMailer();

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

//Configuração do e-mail

//Usando envio de email com SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

//Configurando nome de usuário e senha

$mail->Username = "renanslopes8@gmail.com";
$mail->Password = "";

//Configuração de quem está enviando e quem receberá o E-mail
//DE:
$mail->setFrom("renanslopes8@gmail.com", "Projeto PHP Academic Market");
//PARA:
$mail->addAddress("renanslopes8@gmail.com");

//Configuração do título do E-mail
$mail->Subject = "Contato Projeto PHP Academic Market";

//Configuração do corpo do E-mail
$mail->msgHTML("<html>De: {$nome}<br><br>E-Mail: {$email}<br><br>Mensagem: {$mensagem}</html>");
$mail->AltBody = "De: {$nome}\n\nE-Mail:{$email}\n\nMensagem: {$mensagem}";

//Configuração de Retorno

if($mail->send()) {
    $_SESSION["info"] = "Muito Obrigado suas críticas ou sugestões serão analisadas e logo daremos um retorno!";
    header("Location: contato-form-email.php");
} else {
    $_SESSION["info"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato-form-email.php");
}
die();
