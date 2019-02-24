<?php
$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
//echo $email;
if (mail("2501987@mail.ru", "Заявка с сайта",". E-mail: ".$email ,"From: 2501987@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>