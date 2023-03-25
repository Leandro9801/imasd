<?php
error_reporting(0);
session_start();
if($_SESSION["autentificado"] != "SI"){

  header("Location: ../Views/paneladmipro.php");
  exit();
} else {
  header("Location: ../Views/paneladmipro.php");
  exit();
}