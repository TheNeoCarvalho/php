<?php
  session_start();

  if($_POST){

    $user = $_POST['email'];
    $pass = $_POST['password'];
    $lembrar = $_POST['check'];
  
    if($user == "manoel@gmail.com" && $pass == "123"){

      if(isset($lembrar)){
        setcookie('user',  $user, time()+3600);
      }
      
      $_SESSION['user'] = $user;
  
      header('location: dash.php');
  
    }else{
  
      header('location: index.php');
  
    }
  }

?>