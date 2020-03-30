<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session e Cookie</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
  <?php
    session_start();
    error_reporting(0);
    
    if(!$_SESSION['user']){
      header('location: index.php');
    }

    if($_COOKIE['user']){
      echo "<h1>COOKIE:<span class='text-success'>".$_COOKIE['user']."</span></h1>";
      $_SESSION['user'] = $_COOKIE['user'];
    }

    if($_SESSION['user']){
      echo "<h1>SESSION:<span class='text-success'>".$_SESSION['user']."</span></h1>";
    }
   
    echo "<form method='POST' action='exit.php'><button name='sair' typ='submit'>Sair</button></a>";

        
  ?>

</body>
</html>
