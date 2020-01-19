<?php
if(isset($_POST['send']) && !empty($_POST['name']) && empty($_POST['email']) && empty($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message =$_POST['message'];
    $header ="From: noreply@webme.com" . "\r\n";
    $header .= "Reply-To: noreply@webme.com" . "\r\n";
    $header .= "X-Mailer: PHP/". phpversion();
    $mail =mail("ld.fennema@gmail.com","contacto por paginaweb :" . $email,$message,$header);
    if ($mail){
        echo" <h4> Mail enviado exitosamente!</h4>";
    }
}
>