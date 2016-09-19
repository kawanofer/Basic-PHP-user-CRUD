<div class="form">
<div class="container">
	<form action="" method="post" id="id_ajax">
		<fieldset>
			<legend>Editar Usuário</legend>
			<div class="control-group">
				<label>Nome:</label>
				<input type="text"  name="nome" value="<?php echo $usuarios->nome; ?>" class="input-block-level"/>
			</div>
			<div class="control-group">
				<label>Sobrenome:</label>
				<input type="text" name="sobrenome" value="<?php echo $usuarios->sobrenome; ?>" class="input-block-level"/>
			</div>
			<div class="control-group">
				<label>Endereco:</label>
				<input type="text" name="endereco" value="<?php echo $usuarios->endereco; ?>" class="input-block-level"/>
			</div>
			<input type="submit" name="submit" value="Enviar" class="btn btn-primary"/>
		</fieldset>
	</form>
	</div>
</div>
