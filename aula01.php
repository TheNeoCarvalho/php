<?php

  echo"
    <form method='POST'>
      <input type='text' name='nome'>
      <input type='submit' value='Enviar'>
    </form>
  ";
  $nome = 'Nenhum';
  if($_POST && $_POST['nome']){
    $nome = $_POST['nome']; 
  }

  echo "Nome: {$nome}";
  echo '<br>';
  echo "Método: {$_SERVER["REQUEST_METHOD"]}";

?>