<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Usuario</h2>

<form action="edit.php?id=<?php echo $usuario['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="usuario['nome']" value="<?php echo $usuario['nome']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="rua">rua</label>
      <input type="text" class="form-control" name="usuario['rua']" value="<?php echo $usuario['rua']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="numero">Numero</label>
      <input type="text" class="form-control" name="usuario['numero']" value="<?php echo $usuario['numero']; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="cep">cep</label>
      <input type="text" class="form-control" name="usuario['cep']" value="<?php echo $usuario['cep']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="complemento">complemento</label>
      <input type="text" class="form-control" name="usuario['complemento']" value="<?php echo $usuario['complemento']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="bairro">bairro</label>
      <input type="text" class="form-control" name="usuario['bairro']" value="<?php echo $usuario['bairro']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="usuario['cidade']" value="<?php echo $usuario['cidade']; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="estado">estado</label>
      <input type="text" class="form-control" name="usuario['estado']" value="<?php echo $usuario['estado']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="usuario['phone']" value="<?php echo $usuario['phone']; ?>">
    </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>