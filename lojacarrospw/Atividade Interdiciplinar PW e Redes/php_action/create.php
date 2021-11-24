<?php
  //Sessão
  session_start();

  //Conexão db
  include_once 'db_connect.php';

  if(isset($_POST['btn-adicionar'])):
    $marca = mysqli_escape_string($connect, $_POST['marca']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $ano_mod_fabri = mysqli_escape_string($connect, $_POST['ano_mod_fabri']);
    $cor = mysqli_escape_string($connect, $_POST['cor']);
    $placa = mysqli_escape_string($connect, $_POST['placa']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);

    $sql = "INSERT INTO carros  VALUES(null, '$marca', '$modelo', '$descricao', '$ano_mod_fabri', '$cor', '$placa', $valor)"; 

    /*$sql = "INSERT INTO carros (marca, modelo, descricao, ano_mod_fabri, cor, placa, valor ) VALUES('lindo', 'ruim', 'dndasd', '2011/2040', 'prata', '74adsd4', '1500')"; */

    if(mysqli_query($connect, $sql )):
      header("Location: ../consultar.php?sucesso");
    else :
     header("Location: ../consultar.php?erroLixo");
    endif;
  endif;
?>