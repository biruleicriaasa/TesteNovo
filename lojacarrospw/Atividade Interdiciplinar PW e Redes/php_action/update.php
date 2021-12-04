<?php
  //Sessão
  session_start();

  //Conexão db
  include_once 'db_connect.php';

  if(isset($_POST['btn-alterar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $nascimento = mysqli_escape_string($connect, $_POST['nascimento']);
    $sexo = mysqli_escape_string($connect, $_POST['sexo']);
    $RG = mysqli_escape_string($connect, $_POST['rg']);
    $CPF = mysqli_escape_string($connect, $_POST['cpf']);
    $rua = mysqli_escape_string($connect, $_POST['rua']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    
    $sql = " UPDATE cliente SET nome = '$nome',
             sobrenome = '$sobrenome', nascimento = '$nascimento',
             sexo = '$sexo', RG = '$RG', CPF = '$CPF', rua = '$rua', numero = '$numero', 
             bairro = '$bairro', cidade = '$cidade', estado = '$estado'  WHERE id = $id "; 

   /*$sql = " UPDATE carros SET marca = 'dono do mundo', modelo = 'ruim', descricao = 'asdasdasd',
   ano_modelo_frabri = '2014/8000', cor = 'sem cor', placa = 'nao tem placa', valor = 1477 WHERE id = 9 "; */

    if(mysqli_query($connect, $sql )):
      header("Location: ../consultar.php?sucesso");
    else :
     header("Location: ../consultar.php?falha");
    endif;
  endif;
?>

