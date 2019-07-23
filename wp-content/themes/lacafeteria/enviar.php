<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

// Trocar os valores abaixo
$email_destinatario = 'contato@lacafeteria.com.br';
$assunto = "Formulario La Cafeteria";
$url = '/lacafeteria/contato';

// Valores do usuario -> busca pelo name
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$mensagem = $_POST['message'];

// Verifica se nome é válido
if(empty($nome) || !preg_match("/^[a-zA-Z'-]/", $nome)) {
    echo "<script> alert('Nome inválido.'); </script>";
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=" . $url . "'>";
} else {
    // Verifica se email é válido
    if(!filter_var( $email, FILTER_VALIDATE_EMAIL )) {
        echo "<script> alert('E-mail inválido.'); </script>";
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=" . $url . "'>";
    } else {
         // Verifica se mensagem é válida
        if(empty($mensagem) || !preg_match("/^[a-zA-Z'-]/", $mensagem)) {
            echo "<script> alert('Mensagem inválida.'); </script>";
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=" . $url . "'>";  
        } else {

            $body = "$mensagem\n\n-------------------------\n\nNome: $nome\nTelefone: $telefone\nEnviado por: $email";

            // Configurando o PHPMailer

            require ('./PHPMailer/PHPMailerAutoload.php');

            $mail = new PHPMailer;
            $mail->CharSet = 'UTF-8';
            $mail->WordWrap = 70;
            $mail->addAddress($email_destinatario);
            $mail->From = $email;
            $mail->FromName = $nome;
            $mail->AddReplyTo($email, $nome);
            $mail->Subject = $assunto;
            $mail->Body = $body;

            // Verifica se o email foi enviado
            if(!$mail->send()) {
                echo "<script> setTimeout(() => { swal('Erro!', 'Falha ao enviar o Formulário!', 'error').then((value) => { window.location.replace('/lacafeteria/contato') }) }, 3000);  </script>";
                // Recarrega a pagina do replace
            } else {
                echo "<script> setTimeout(() => { swal('Feito!', 'Formulário enviado com sucesso!', 'success').then((value) => { window.location.replace('/lacafeteria/contato') }) }, 3000);  </script>";
                // Recarrega a pagina do replace
            }
        }
    }
}
?>
