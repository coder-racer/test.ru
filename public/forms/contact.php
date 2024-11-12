<?php
$token  = '6897301980:AAGuOqv1s9Ky7vFfn4P4EOFGn_ojYTE2apg';
$chatId = '-1001996417039';

$text  = '<b>Контактная форма</b>%0A';
$text .= "<u>Имя</u>: " . $_POST['name'] . "%0A";
$text .= "<u>Почта</u>: " . $_POST['email'] . "%0A";
$text .= "<u>Тема</u>: " . $_POST['subject'] . "%0A";
$text .= "<u>Письмо</u>: " . $_POST['message'] . "%0A";
$query = http_build_query([
    'chat_id' => $chatId,
    'text'    => $text,
]);
//$url   = "https://api.telegram.org/bot{$token}/sendMessage?{$query}";
$url   = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&parse_mode=html&text={$text}";
file_get_contents($url);
echo 'OK'
?>
