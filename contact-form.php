<?
$to = "info@monolit-org.ru";
$tema = "Новый заказ";
$message = "Фамилия: " . $_POST['surname'] . "<br>";
$message .= "Имя: " . $_POST['name'] . '<br>';
$message .= "Отчество: " . $_POST['patronymic'] . "<br>";
$message .= "Телефон: " . $_POST['tel'] . "<br>";
$message .= "E-mail: " . $_POST['email'] . "<br>";
$message .= "Сообщение заказа: " . $_POST['msg'] . "<br>" . "<hr>" . "<br>" . "(Заказ отправлен с сайта)";




$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>