<?php
  //Sessão
  include_once 'php_action/db_connect.php';

  //Header
  include_once 'includes/header.php';
 ?>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">

        <div class="col s12 m12 l12 xl12">
          <h3 class="light">Relatorio</h3>
           <form action="php_action/report.php" target="_blank" method="POST">
           
           <div class="col s6">
              <label for="cpf">Selecione o CPF</label>
              <select name="cpfselecionado" id="cpfselecionado">
                <option value="TODOS OS CLIENTES">TODOS OS CLIENTES</option>
                <?php
                  $sql = "SELECT DISTINCT cpf FROM cliente";
                  $resultado = mysqli_query($connect, $sql);
                  while($dados = mysqli_fetch_array($resultado)): //inicio do laço
                ?>
                <option value="<?php echo $dados['cpf']?>"><?php echo $dados['cpf']?></option>
                <?php endwhile; //fim do laço?> 
              </select>
            </div>

            <div class="col s6">
              <button type="submit" name="btn-relatorio" class="btn orange" value="selecionar">Selecionar</button>
            </div>
           </form>
        </div>        
      </div>

    </div>
  </div>


 
  <?php
    include_once 'includes/footer.php';
  ?>