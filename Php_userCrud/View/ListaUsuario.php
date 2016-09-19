<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Php_userCrud/Controller/Usuario.php';
?>

<div class="altura">
	<div class="user">
		<h1>Lista de Usuarios</h1>
	</div>
	<div class="center">	
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Endereço</th>
					<th>Ações</th>
				</tr>	
			</thead>
			<tbody>
				<?php $usuario  = new Controle_usuario();
				$usuarios = $usuario->TodosUsuario();
				$total    = count($usuarios);
				if($total!=0){
					for ($i = 0; $i < $total; $i++): ?>
						<tr>
							<td class="space"><?php echo $usuarios[$i]->getNome(); ?></td>
							<td><?php echo $usuarios[$i]->getSobrenome(); ?></td>
							<td><?php echo $usuarios[$i]->getEndereco(); ?></td>
							<td>
								<a class="btn btn-small" href="index.php?mostrar=usuario&opcao=excluir&idu=<?php echo $usuarios[$i]->getid(); ?>"><i class="icon-trash"></i></a> 
								<a class="btn btn-small" href="index.php?mostrar=usuario&opcao=editar&idu=<?php echo $usuarios[$i]->getid(); ?>"><i class=" icon-edit"></i></a>
							</td>
						</tr>
					<?php endfor;
				}else{
					echo "<tr><td class='danger'>Nenhum registro encontrado</td><td></td><td></td><td></td></tr>";
				}?>
			</tbody>
		</table>
		<a href="index.php?mostrar=usuario&opcao=novo">
			<button class="btn btn-primary" type="button">Adicionar <i class="icon-plus"></i></button>
		</a>
	</div>
</div>