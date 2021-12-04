<?php
  //Sessão
  include_once 'db_connect.php';
?>

  <!DOCTYPE html>
  <html lang="pt_br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Hipnos Colchões</title>
  
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js">defer</script>
    <script src="../js/materialize.js">defer</script>
    <script src="../js/init.js">defer</script>
  </head>
  <body>

<div class="btn-large azul-marinho right"><a href="" onclick="window.print()">Imprimir</a></div>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <img src="../assist/Imagens/3.png" width="200px"/>
        <div class="col s12 m12 l12 xl12">
          <h3 class="light">Relatório</h3>
            <?php 
              if(isset($_POST['btn-relatorio'])):
                $cpfselecionado = $_POST['cpfselecionado'];
              endif;
            ?>
            <h4 class="light"><?php echo $cpfselecionado; ?></h4>

          <table class="striped">
            <thead>
              <tr>
              <th>ID</th>
               <th>Nome</th>
               <th>Sobrenome</th>
               <th>Nascimento</th>
               <th>Sexo</th>
               <th>RG</th>
               <th>CPF</th>
               <th>Rua</th>
               <th>N da Casa</th>
               <th>Bairro</th>
               <th>Cidade</th>
               <th>Estado</th>
             </tr>
            </thead>
            <tbody>

            <?php 
              if(isset($_POST['btn-relatorio'])):
                if($cpfselecionado == "TODOS OS CLIENTES"):
                  $sql = "SELECT * FROM cliente ORDER BY nome, sobrenome, nascimento,
                  sexo, rg, cpf, rua, numero, bairro, cidade, estado ";
                else:
                  $sql = "SELECT * FROM cliente WHERE marca = '$cpfselecionado' ORDER BY nome, sobrenome, nascimento, sexo, rg, cpf, rua, numero, bairro, cidade, estado ";
                endif;
              
                $resultado = mysqli_query($connect, $sql);
                while($dados = mysqli_fetch_array($resultado)):
            ?>
              <tr>
                <td><?php echo $dados['nome'];?></td>
                <td><?php echo $dados['sobrenome'];?></td>
                <td><?php echo $dados['nascimento'];?></td>
                <td><?php echo $dados['sexo'];?>Mod/Fab</td>
                <td><?php echo $dados['rg'];?></td>
                <td><?php echo $dados['cpf'];?></td>
                <td><?php echo $dados['rua'];?></td>
                <td><?php echo $dados['numero'];?>Mod/Fab</td>
                <td><?php echo $dados['bairro'];?></td>
                <td><?php echo $dados['cidade'];?></td>
                <td><?php echo $dados['estado'];?></td>
              </tr>

              <?php endwhile;
            endif; ?>
            </tbody>
          </table>
        </div>        
      </div>

    </div>
  </div>


 
  </body>
</html>
