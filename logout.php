<?php
if($_POST){

  session_start();
  session_destroy();
  setcookie("PHPSESSID", "", time() - 6400);
  setcookie('userEmail', null, time() - 1);
  setcookie('userPass', null, time() - 1);
  header("Location: login.php");
}
?>
