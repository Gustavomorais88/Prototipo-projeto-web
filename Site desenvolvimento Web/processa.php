<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $menssagem = $_POST['menssagem'];
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "morais.rodolfo@outlook.com");
        $subject = "Menssagem";
        $to = new SendGrid\Email(null, "morais.rodolfo@outlook.com");
        $content = new SendGrid\Content("text/html", "Olá Gustavo, <br><br>Nova menssagem de contato<br><br>Nome: $nome<br>Email: $email<br>Telefone: $fone<br>Menssagem: $menssagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Menssagem enviada";
        
        ?>
    </body>
</html>
