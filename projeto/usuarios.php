<?php 
include "UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();
$lista = $usuarioDAO->buscar();

?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Navbar</a>

		<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>

				<li class="nav-item">
					<a class="nav-link disabled" href="#">Desativado</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
			</form>
		</div>
	</nav>

	<div class="container-fluid">	
		<div class="row">

			<div class="col-2">
				<ul class="nav flex-column nav-pills vertical">
					<li class="nav-item">
						<a class="nav-link active" href="#">Ativo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Desativado</a>
					</li>
				</ul>
			</div>

			<div class="col-10">	
				<h3>Usuários</h3>
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalnovo">
					<i class="fas fa-user-plus"></i>
					Novo Usuário
				</button>
				<table class="table">	
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Ações</th>
					</tr>
					<?php foreach($lista as $usuario): ?> 
					<tr>
						<td><?= $usuario->idUsuario ?></td>
						<td><?= $usuario->nome ?></td>
						<td><?= $usuario->email ?></td>
						<td>
							<a class="btn btn-danger" href="UsuariosController.php?acao=apagar&id=<?= $usuario->idUsuario ?>">
								<i class="fas fa-user-times"></i>
							</a>
							<button class="btn btn-warning">
								<i class="fas fa-user-edit"></i>
							</button>
							<button class="btn btn-primary">
								<i class="fas fa-user-lock"></i>
							</button>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="modalnovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Novo usuário</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="UsuariosController.php" method="POST">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" name="nome" class="form-control" id="nome" placeholder="nome completo">
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="e-mail">
						</div>

						<div class="form-group">
							<label for="senha">Senha</label>
							<input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
				</form>
			</div>
		</div>
	</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>