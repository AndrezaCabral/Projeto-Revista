<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isMail(true);                                            //Send using SMTP
    $mail->Host       = 'smtp.exemplo.com.br';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'envios@exemplo.com.br';                     //SMTP username
    $mail->Password   = 'C*dbZ1g-5pp5s+Pkgw0%cb8';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet    = "UTF-8";

    //Recipients
    $mail->setFrom('envios@exemplo.com.br', 'Envios');
    $mail->addAddress('contato01@exemplo.com.br', 'Contato');     //Add a recipient
    //$mail->addAddress('andreza.opo@gmail.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    if($_POST["formulario_nome"] == "contato"){
        $body = "Olá, segue abaixo uma mensagem encaminhada por um usuário do site <br><br>";
        $body .= "Nome: ".$_POST["nome"]."<br>";
        $body .= "Email: ".$_POST["email"]."<br>";
        $body .= "Telefone: ".$_POST["telefone"]."<br>";
        $body .= "Mensagem: ".nl2br($_POST["mensagem"])."<br>";
        $body .= "URL: ".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."
";

        $mail->Subject = 'Contato encaminhado através do site';
    }
    elseif($_POST["formulario_nome"] == "orcamento"){
        $body = "Olá, segue abaixo uma cotação encaminhada pelo site<br><br>";
        $body .= "Empresa: ".$_POST["nome"]."<br>";
        $body .= "CNPJ: ".$_POST["cnpj"]."<br>"; 
        $body .= "Telefone: ".$_POST["telefone"]."<br>";
        $body .= "Localização: ".$_POST["localizacao"]."<br>";
        $body .= "Email: ".$_POST["email"]."<br>";
        $body .= "Mensagem: ".nl2br($_POST["mensagem"])."<br>";
        $body .= "URL: ".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."
";

        $mail->Subject = 'Cotação encaminhada através do site';
    }

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    //echo 'Message has been sent';
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

<?php
include "header.php";
?>


<!-- SEÇÃO OBRIGADO -->
<section class="obrigado py-5">
    <div class="col-md-12 text-center">
        <h1><strong>Mensagem enviada!</strong></h1>
        <h4>Agradecemos pelo contato.</h4>
        <a href="index.php"><img src="./assets/images/logo/logo.png" alt=""></a>
        <a href="index" class="link-light link"></a>
        <br>
        <br>
        <meta http-equiv='refresh' content='3; url=index'>
    </div>
</section>






