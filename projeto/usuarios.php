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
				<button class="btn btn-primary" >
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
					<tr>
						<td>1</td>
						<td>João</td>
						<td>joao@etecia.com.br</td>
						<td>
							<button class="btn btn-danger">
								<i class="fas fa-user-times"></i>
							</button>
							<button class="btn btn-warning">
								<i class="fas fa-user-edit"></i>
							</button>
							<button class="btn btn-primary">
								<i class="fas fa-user-lock"></i>
							</button>
						</td>
					</tr>
				</table>
			<form>
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" placeholder="nome completo">
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" class="form-control" id="email" placeholder="e-mail">
				</div>

				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" id="senha" placeholder="Senha">
				</div>
				<button class="btn">Cancelar</button>
				<button type="submit" class="btn btn-primary">Criar</button>
			</form>
			</div>

		</div>
	</div>


</body>
</html>