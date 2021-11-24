<?php
  //Sessão
  session_start();

  //Conexão db
  include_once 'db_connect.php';

  if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = " DELETE FROM carros WHERE id = '$id'"; 

    if(mysqli_query($connect, $sql )):
      header("Location: ../consultar.php?sucesso");
      echo $id;
    else :
     header("Location: ../consultar.php?erroLixo");
     echo $id;
    endif;
  endif;
?>