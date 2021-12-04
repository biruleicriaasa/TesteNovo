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
          <h3 class="light"> Lista de Clietes</h3>
          <table>
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
                $sql = "select * from cliente";
                $resultado = mysqli_query($connect, $sql);

                while($dados = mysqli_fetch_array($resultado)):
              ?>
              <tr>
                <td><?php echo $dados['id'];?></td>
                <td><?php echo $dados['nome'];?></td>
                <td><?php echo $dados['sobrenome'];?></td>
                <td><?php echo $dados['nascimento'];?></td>
                <td><?php echo $dados['sexo'];?></td>
                <td><?php echo $dados['rg'];?></td>
                <td><?php echo $dados['cpf'];?></td>
                <td><?php echo $dados['rua'];?></td>
                <td><?php echo $dados['numero'];?></td>
                <td><?php echo $dados['bairro'];?></td>
                <td><?php echo $dados['cidade'];?></td>
                <td><?php echo $dados['estado'];?></td>
                
                <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edite</i></a></td>

                <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons"> delete</i></a></td>

                 <!-- Modal Structure -->
                <div id="modal<?php echo $dados['id'];?>" class="modal modal-fixed-footer">
                  <div class="modal-content">
                    <h4>Deseja Excluir Esse Cliente?</h4>
                    <p><?php echo $dados['nome'];?> - <?php echo $dados['sobrenome'];?> - 
                       <?php echo $dados['nascimento'];?> - <?php echo $dados['rg'];?> -
                       <?php echo $dados['cpf'];?> - <?php echo $dados['rua'];?> -
                       <?php echo $dados['numero'];?> - <?php echo $dados['bairro'];?> -
                       <?php echo $dados['cidade'];?> - <?php echo $dados['estado'];?> - </p>
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
