<?php
session_start();
ob_start();

if (isset($_POST['btnS'])) {

  $nombre = $_SESSION['nombre'];
  $email = $_SESSION['email'];
  $celular = $_SESSION['celular'];
  $mensaje = $_SESSION['mensaje'];

  $correo = "verdaluno@gmail.com";

  mail($correo, "MFGenerals Web | " . $nombre . " ", $mensaje . "... Enviado por: " . $nombre . " Email: " . $email . " Número de contato: " . $celular);

  echo "<script>
    alert('Gracias por enviar tus comentarios.');
    window.location= 'index.php'
  </script>";
}
