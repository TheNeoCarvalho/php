<?php
session_start();

if($_POST){
  session_destroy();
  if(isset($_COOKIE['user'])){
    setcookie('user', '');
    unset($_COOKIE['user']);
    echo 'session destruida';
  }
  header('location: index.php');
  
}
?>