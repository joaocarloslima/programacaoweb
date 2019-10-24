<?php $url = $_SERVER["PATH_INFO"] ?>
	<div class="container-fluid">	
		<div class="row">
			<div class="col-2">
				<ul class="nav flex-column nav-pills vertical">
					<li class="nav-item">
						<a class="nav-link <?= ($url=='/usuarios')?'active':'' ?>" href="/usuarios">Usuários</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= ($url=='/questoes')?'active':'' ?>" href="/questoes">Questões</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= ($url=='/alternativas')?'active':'' ?>" href="alternativas.php">Alternativas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ranking.php">Ranking</a>
					</li>
				</ul>
			</div>