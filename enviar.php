<?php
session_start();
ob_start();

if (isset($_POST['btnS'])) {

  $nombre = $_SESSION['nombre'];
  $email = $_SESSION['email'];
  $celular = $_SESSION['celular'];
  $mensaje = $_SESSION['mensaje'];

  //$correo = "verdaluno@gmail.com";
  $correo = "mfgenerals@gmail.com";

  mail($correo, "MFGenerals Web | " . $nombre . " ", $mensaje . "... Enviado por: " . $nombre . " Email: " . $email . " Número de contato: " . $celular);

  echo "<script>
    alert('Gracias por enviar tu mensaje, proto nos pondrémos en contacto.');
    window.location= 'index.php'
  </script>";
}
