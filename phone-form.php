<?
$to = "info@monolit-org.ru";
$tema = "Заявка на обратный звонок";
$message = "Имя: " . $_POST['name'] . "<br>";
$message .= "Телефон: " . $_POST['tel'] . '<br>';
$message .= "Сообщение заявки: " . $_POST['msg'] . "<br>" . "<hr>" . "<br>" . "(Заявка отправлена с сайта)";


$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>