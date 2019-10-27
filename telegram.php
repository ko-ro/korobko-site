<?php
$name = $_POST['user-name'];
$surname = $_POST['user-surname'];
$email = $_POST['user-email'];
$telegram = $_POST['user-telegram'];
$message = $_POST['user-message'];

$token = "949565640:AAEGoYzcWtY0kC3MTI0KNfdkWFgxVe8NOQs";
$chat_id = "-391511120";

$arr = array(
  'name : ' => $name,
  'surname : ' => $surname,
  'email : ' => $email,
  'telegram : ' => $telegram,
  'message : ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
