<?php
session_start();
ob_start();

if (isset($_POST['btnS'])) {

  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $mensaje = $_POST['mensaje'];
  $bot = $_POST['mensaje'];

  $correo = "verdaluno@gmail.com";
  //$correo = "mfgenerals@gmail.com";

  if ($bot == "dorado" || $bot == "Dorado" || $bot == "DORADO") {
    mail($correo, "MFGenerals Web | " . $nombre . " ", $mensaje . "... Enviado por: " . $nombre . " Email: " . $email . " Número de contato: " . $celular);
  }
  echo "<script>
    alert('Gracias por enviar tu mensaje, proto nos pondrémos en contacto.');
    window.location= 'index.php'
  </script>";
}
