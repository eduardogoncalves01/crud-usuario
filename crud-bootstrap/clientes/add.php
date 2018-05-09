<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Usuario</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="usuario['nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="rua">rua</label>
      <input type="text" class="form-control" name="usuario['rua']">
    </div>

    <div class="form-group col-md-2">
      <label for="numero">Numero</label>
      <input type="text" class="form-control" name="usuario['numero']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="cep">cep</label>
      <input type="text" class="form-control" name="usuario['cep']">
    </div>

    <div class="form-group col-md-3">
      <label for="complemento">complemento</label>
      <input type="text" class="form-control" name="usuario['complemento']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="bairro">bairro</label>
      <input type="text" class="form-control" name="usuario['bairro']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="usuario['cidade']" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="estado">estado</label>
      <input type="text" class="form-control" name="usuario['estado']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="usuario['phone']">
    </div>
    
    
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>