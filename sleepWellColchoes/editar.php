<?php
include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM cliente WHERE id = $id";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>



<div class="section no-pad-bot" id="index-banner">
<div class="container">
  <br><br>
 
  <div class="row center">
    <div class="col s12 m12 l12 xl12">
      <h3 class="ligth">Atualizar Cliente</h3>
      <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id'];?>" >
        
        <div class="input-field col s12 m4">
          <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'];?>"/>
          <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="nascimento" id="nascimento" value="<?php echo $dados['nascimento'];?>"/>
          <label for="nascimento">Nascimento</label>
        </div>
        
        <div class="input-field col s12 m4">
          <input type="text" name="sexo" id="sexo" value="<?php echo $dados['sexo'];?>"/>
          <label for="sexo">Sexo</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="rg" id="rg" value="<?php echo $dados['rg'];?>">
          <label for="rg">RG</label>
        </div>
      
        <div class="input-field col s12">
          <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf'];?>">
          <label for="cpf">CPF</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="rua" id="rua" value="<?php echo $dados['rua'];?>">
          <label for="rua">Rua</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="numero" id="numero" value="<?php echo $dados['numero'];?>">
          <label for="numero">Núumero</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro'];?>">
          <label for="bairro">Bairro</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade'];?>">
          <label for="cidade">Cidade</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="estado" id="estado" value="<?php echo $dados['estado'];?>">
          <label for="estado">UF</label>
        </div>

        <button type="submit" name="btn-alterar" class="btn azul-marinho">Atualizar</button>
      </form>
    </div>
  </div>
</div>
</div>

<?php
include_once 'includes/footer.php';
?>

