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
          <h3 class="light"> Estoque de Carros</h3>
          <table>
            <thead>
              <tr>
              <th>ID</th>
               <th>Marca</th>
               <th>Modelo</th>
               <th>Descrição</th>
               <th>Mod/Fab</th>
               <th>Cor</th>
               <th>Placa</th>
               <th>Valor</th>
             </tr>
            </thead>
            <tbody>
              <?php
                $sql = "select * from carros";
                $resultado = mysqli_query($connect, $sql);

                while($dados = mysqli_fetch_array($resultado)):
              ?>
              <tr>
                <td><?php echo $dados['id'];?></td>
                <td><?php echo $dados['marca'];?></td>
                <td><?php echo $dados['modelo'];?></td>
                <td><?php echo $dados['descricao'];?></td>
                <td><?php echo $dados['ano_mod_fabri'];?>/td>
                <td><?php echo $dados['cor'];?></td>
                <td><?php echo $dados['placa'];?></td>
                <td><?php echo $dados['valor'];?></td>
                
                <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edite</i></a></td>

                <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons"> delete</i></a></td>

                 <!-- Modal Structure -->
                <div id="modal<?php echo $dados['id'];?>" class="modal modal-fixed-footer">
                  <div class="modal-content">
                    <h4>Deseja Excluir Esse Carro?</h4>
                    <p><?php echo $dados['marca'];?> - <?php echo $dados['modelo'];?> - 
                       <?php echo $dados['descricao'];?> - <?php echo $dados['ano_mod_fabri'];?>
                       <?php echo $dados['cor'];?> - <?php echo $dados['placa'];?> - 
                       <?php echo $dados['valor'];?></p>
                  </div>
                  <div class="modal-footer">
                    
                    <form action="php_action/delete.php" method="POST" >
                      <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                      <a href="#!" class="modal-close waves-effect waves-green btn grapheme_strlen">Não Excluir</a>
                      <button type="submit" name="btn-deletar" class="btn red">Sim, Excluir!</button>


                    </form>
                  </div>
                </div>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>        
      </div>

    </div>
  </div>


 
  <?php
    include_once 'includes/footer.php';
  ?>
