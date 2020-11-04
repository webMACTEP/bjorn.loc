<?
$name = $_POST['name'];
$phone = $_POST['phone'];
$typeform = $_POST['titleform'];
$vin = $_POST['vin'];
$comment = $_POST['comment'];
$opinion = $_POST['opinion'];

    function send_mail($message){
    

        // заголовок письма

        $headers= "MIME-Version: 1.0\r\n";

        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма

        $headers .= "From: zakaz@bjorn-motors.ru\r\n"; // от кого письмо

        // отправляем письмо 

        mail($_POST['maillink'], $_POST['titleform'], $message, $headers);
    }

// POST processing
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{


            $message  = "Телефон: " . $phone . "<br/>";

            if ($name > ""){

                $message  .= "Имя: " . $name . "<br/>";

            }

            if ($vin > ""){

                $message  .= "VIN автомобиля: " . $vin . "<br/>";

            }

            if ($opinion > ""){

                $message  .= "Предложение пользователя: " . $opinion . "<br/>";

            }

            if ($comment > ""){

                $message  .= "Неисправность: " . $comment . "<br/>";

            }


            send_mail($message); 



}