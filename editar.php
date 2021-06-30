<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM tbcontato WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
<style>
    .row{
        padding: 25px;
    }
</style>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
                <span class="details">Nome:</span>
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
			</div>

			<div class="input-field col s12">
                <span class="details">Sobrenome:</span>
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" id="sobrenome">
			</div>

			<div class="input-field col s12">
                <span class="details">Telefone:</span>	
				<input type="tel" value="<?php echo $dados['fone'];?>" name="fone" id="fone">
			</div>

			<div class="input-field col s12">
                <span class="details">E-mail:</span>
				<input type="email" value="<?php echo $dados['email'];?>" name="email" id="email">
			</div>

			<div class="input-field col s12">
                <span class="details">Data de nascimento:</span>
				<input type="date" value="<?php echo $dados['dataani'];?>" name="dataani" id="dataani">
			</div>



			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="lista.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
