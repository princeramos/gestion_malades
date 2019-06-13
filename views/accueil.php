<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<head>
			<?php
				include 'template/fichier-en-tete.php';
			 ?>
			<title>Accueil</title>
		</head>
		
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<div id="bloc-page">
					<!-- Inclusion du fichier d'en-tete -->
					<?php
						include 'template/en-tete.php';
					?>
					<section class="row">
						<article class="col-sm-12">
							<div class="panel panel-success">
								<div class="panel-heading">
									<h5><strong><em>Dossier du Patient Nº 009</em></strong></h5>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<h4>Dossier Nº009</h4>
												</div>
												<div class="panel-body">
													<table class="table table-bordered table-striped table-condensed">
														<tr>
															<th>Nom</th>
															<th>Prenom</th>
															<th>Date de Naissance</th>
															<th>Sexe</th>
														</tr>
														<tr>
															Aucune information disponible
														</tr>
													</table>
													<div class="btn-group pull-right">
														<a href="#" class="btn btn-success">Voir</a>
														<a href="#" class="btn btn-info">Modifier</a>
														<a href="#" class="btn btn-warning">Supprimer</a>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<h4>Consultation</h4>
												</div>
												<div class="panel-body">
													<table class="table table-bordered table-striped table-condensed">
														<tr>
															<th>Nom</th>
															<th>Prenom</th>
															<th>Date de Naissance</th>
															<th>Sexe</th>
														</tr>
														<tr>
															Aucune information disponible
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<h4>Visites</h4>
												</div>
												<div class="panel-body">
													<table class="table table-bordered table-striped table-condensed">
														<tr>
															<th>Nom</th>
															<th>Prenom</th>
															<th>Date de Naissance</th>
															<th>Sexe</th>
														</tr>
														<tr>
															
														</tr>
													</table>	
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<h4>Dossier N 009</h4>
												</div>
												<div class="panel-body">
													<table class="table table-bordered table-striped table-condensed">
														<tr>
															<th>Nom</th>
															<th>Prenom</th>
															<th>Date de Naissance</th>
															<th>Sexe</th>
														</tr>
														<tr>
															Aucune information disponible
														</tr>
													</table>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</article>
					</section>
					<footer class="row">
						
					</footer>
				</div>
			</div>
		</div>
	</body>
</html>


