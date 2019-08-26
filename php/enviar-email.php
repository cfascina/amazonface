<?php
$name = $_POST['nome'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$telefone = $_POST['telefone'];
//pega os dados que foi digitado no ID message.

$message = $_POST['mensagem'];
//pega os dados que foi digitado no ID message.

$subject = 'Formulario de contato do site';
//pega os dados que foi digitado no ID sebject.

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Telefone: " . $telefone . "\n";
$corpo .= "Comentários: " . $message . "\n";

$email_to = 'contato@amazon-face.org';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
  header('location: ', 'http://www.amazon-face.org/email-enviado.html')

} else {
  echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
  
//mensagem de erro no envio. 

}
?>