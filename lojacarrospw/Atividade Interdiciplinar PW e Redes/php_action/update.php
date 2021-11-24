<?php
  //Sessão
  session_start();

  //Conexão db
  include_once 'db_connect.php';

  if(isset($_POST['btn-alterar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $marca = mysqli_escape_string($connect, $_POST['marca']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $ano_mod_fabri = mysqli_escape_string($connect, $_POST['ano_mod_fabri']);
    $cor = mysqli_escape_string($connect, $_POST['cor']);
    $placa = mysqli_escape_string($connect, $_POST['placa']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    
    $sql = " UPDATE carros SET marca = '$marca', modelo = '$modelo', descricao = '$descricao',
    ano_mod_fabri = '$ano_mod_fabri', cor = '$cor', placa = '$placa', valor = $valor WHERE id = $id "; 

   /*$sql = " UPDATE carros SET marca = 'dono do mundo', modelo = 'ruim', descricao = 'asdasdasd',
   ano_modelo_frabri = '2014/8000', cor = 'sem cor', placa = 'nao tem placa', valor = 1477 WHERE id = 9 "; */

    if(mysqli_query($connect, $sql )):
      header("Location: ../consultar.php?sucesso");
    else :
     header("Location: ../consultar.php?erroLixo");
    endif;
  endif;
?>

