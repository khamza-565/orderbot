<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$last = $_POST['last_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$order = $_POST['order'];
$adres = $_POST['adres'];
$token = "6236264846:AAG5HQHGcExgjwxAUF_VFOp_p9_wqpDGQAk";
$chat_id = "-983273079";
$arr = array(
  'Имя пользователя: ' => $name,
  'Фамилия: ' => $last,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Заказ:' => $order,
  'Адрес:' => $adres
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: site/thank-you.html');
} else {
  echo "Error";
}
?>
