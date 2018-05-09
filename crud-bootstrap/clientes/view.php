<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Usuario <?php echo $usuario['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $usuario['nome']; ?></dd>

	<dt>rua:</dt>
	<dd><?php echo $usuario['rua']; ?></dd>

	<dt>Numero:</dt>
	<dd><?php echo $usuario['numero']; ?></dd>
</dl>
	<dt>cep:</dt>
	<dd><?php echo $usuario['cep']; ?></dd>

	<dt>complemento:</dt>
	<dd><?php echo $usuario['complemento']; ?></dd>

	<dt>bairo:</dt>
	<dd><?php echo $usuario['bairo']; ?></dd>

	<dt>cidade:</dt>
	<dd><?php echo $usuario['cidade']; ?></dd>
</dl>

	<dt>estado:</dt>
	<dd><?php echo $usuario['estado']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $usuario['phone']; ?></dd>

</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>