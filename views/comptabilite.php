<!DOCTYPE html>
<html>
	<head>
		<?php include 'template/fichier-en-tete.php'; ?>
		<title>Comptabilité</title>
	</head>
	<body>
		<?php include 'template/en-tete.php'; ?>
		<section class="row">
			<div class="recherche">
				<div class="container">
					<div class="row recherche" style="padding-top: 45px; padding-bottom: 15px;">
						<div class="col-lg-3 col-md-3 col-sm-4">
							<h4>Hopital Ref Kenya</h4>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-6">
							<form method="post" action="">
								<div class="input-group">
									<input type="text" name="recherche_patient" class="form-control" placeholder="Chercher un payement" />
									<div class="input-group-btn">
										<button type="submit" name="search" class="btn btn-default">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="container">
						<form method="post">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="panel panel-body">
									<h4>Fomulaire de payement</h4><hr>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="text" name="nom" placeholder="Nom" class="form-control">
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="text" name="prenom" placeholder="Prénom" class="form-control">
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="text" name="idPatient" placeholder="Numero du patient" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="text" name="numChambre" placeholder="Chambre" class="form-control">
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="text" name="designation" placeholder="Désignation" class="form-control">
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="date" name="datePayement" placeholder="Date du payement" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="text" name="montant" placeholder="Montant" class="form-control">
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<input type="text" name="type" placeholder="Type du payement" class="form-control">
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<button type="reset" class="btn btn-success col-md-5">Réinitialiser</button>
											<span class="espace"></span>
											<button type="submit" class="btn btn-success col-md-5" name="confirmer">Confirmer</button>
										</div>
									</div>
									<?php 
										if (isset($_POST['confirmer']))
										{
											if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['idPatient']) && !empty($_POST['idPatient']) && isset($_POST['numChambre']) && !empty($_POST['numChambre']) && isset($_POST['designation']) && !empty($_POST['designation']) && isset($_POST['datePayement']) && !empty($_POST['datePayement']) && isset($_POST['montant']) && !empty($_POST['montant']) && isset($_POST['type']) && !empty($_POST['type']))
											{
												$nom = htmlspecialchars(stripslashes($_POST['nom']));
												$prenom = htmlspecialchars(stripslashes($_POST['prenom']));
												$idPatient = htmlspecialchars(stripslashes($_POST['idPatient']));
												$numChambre = htmlspecialchars(stripslashes($_POST['numChambre']));
												$designation = htmlspecialchars(stripslashes($_POST['designation']));
												$datePayement = htmlspecialchars(stripslashes($_POST['datePayement']));
												$montant = htmlspecialchars(stripslashes($_POST['montant']));
											}	
										}
									?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<?php

						if (isset($_POST['search']))
						{
							
						}else{
							?>
							<table class="table table-responsive table-bordered table-condensed table-striped">
								<tr>
									<th style="text-align: center;">Nº</th>
									<th style="text-align: center;">Nom</th>
									<th style="text-align: center;">Post-Nom</th>
									<th style="text-align: center;">Prénom</th>
									<th style="text-align: center;">Nº Chambre</th>
									<th style="text-align: center;">Désignation</th>
									<th style="text-align: center;">Contact</th>
									<th style="text-align: center;">Montant</th>
									<th style="text-align: center;">Action</th>
								</tr>
								<tr>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										<?php echo ucfirst(""); ?>
									</td>
									<td style="text-align: center;">
										
									</td>
								</tr>
							</table><?php
						}
					?>
				</div>
			</div>
		</section>
	</body>
</html>