<?php

session_start();
if(isset($_SESSION['username'])){
    $userActivo=$_SESSION['username'];
}

?>
