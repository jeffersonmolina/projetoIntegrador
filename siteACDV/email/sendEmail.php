<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['nome']) && isset($_POST['email']) &&
    isset($_POST['cidade']) && isset($_POST['telefone']) && isset($_POST['mensagem'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Config
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "jeffersonmolina9@gmail.com";
        $mail->Password = "jeffcolorado10";
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email settings
        $mail->isHTML(true);
        $mail->setFrom($email, $nome);
        $mail->addAddress("jeffersonmolina9@gmail.com");
        $mail->Subject = $email;
        $mail->Body = $mensagem;

        if($mail->send()){
            //$response = "Email enviado";
            header("Location: ../contato.php?msg=1");
                
        }else{
            //$response = "Email nao enviado<br><br>" . $mail->ErrorInfo;
            header("Location: ../contato.php?msg=2");
        exit(json_encode(array("response" => $response)));
        }
        }
