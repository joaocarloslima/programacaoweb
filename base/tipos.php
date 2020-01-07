<?php 
include "verificarLogin.php";
include "TiposDAO.php";
include "alertas.php";

$tiposDAO = new TiposDAO();
$lista = $tiposDAO->buscar();

include "cabecalho.php";
include "menu.php";
?>
			<div class="col-10">
				<?php 
					mostrarAlerta("success");
					mostrarAlerta("danger");
				?>

				<h3>Tipos de Questões</h3>
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalnovo">
					<i class="fas fa-plus"></i>
					Novo Tipo
				</button>
				<table class="table">	
					<tr>
						<th>#</th>
						<th>Tipo</th>
						<th>Ações</th>
					</tr>
					<?php foreach($lista as $tipo): ?> 
					<tr>
						<td><?= $tipo->idTipoQuestao ?></td>
						<td><?= $tipo->tipo ?></td>
						<td>
							<a class="btn btn-danger" href="TiposController.php?acao=apagar&id=<?= $tipo->idTipoQuestao ?>">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>


	<!-- Modal Novo -->
	<div class="modal fade" id="modalnovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Novo Tipo de Questão</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="TiposController.php?acao=inserir" method="POST">
						<div class="form-group">
							<label for="tipo">Tipo</label>
							<input type="text" name="tipo" class="form-control" id="tipo" placeholder="tipo da questão">
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