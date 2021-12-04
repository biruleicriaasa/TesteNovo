<?php
//header
include_once 'includes/header.php';
?>

<div class="section no-pad-bot" id="index-banner">
<div class="container">
  <br><br>
 
  <div class="row center">
    <div class="col s12 m12 l12 xl12">
      <h3 class="ligth">Cadastrar Cliente</h3>
      <form action="php_action/create.php" method="POST">
        
        <div class="input-field col s12 m4">
          <input type="text" name="nome" id="nome" >
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="sobrenome" id="sobrenome" />
          <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="nascimento" id="nascimento" />
          <label for="nascimento">Nascimento</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="sexo" id="sexo" />
          <label for="sexo">Sexo</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="rg" id="rg" >
          <label for="rg">RG</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="cpf" id="cpf" >
          <label for="cpf">CPF</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="rua" id="rua" >
          <label for="rua">Rua</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="numero" id="numero" >
          <label for="numero">Número</label>
        </div>
        
        <div class="input-field col s12 m4">
          <input type="text" name="bairro" id="bairro" >
          <label for="bairro">Bairro</label>
        </div>

        <div class="input-field col s12 m4">
          <input type="text" name="cidade" id="cidade" >
          <label for="cidade">Cidade</label>
        </div>
        
        <div class="input-field col s12 m4">
          <input type="text" name="estado" id="estado" >
          <label for="estado">Estado</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
      </form>
    </div>
  </div>
</div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>

