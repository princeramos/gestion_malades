<!DOCTYPE html>
<html>
	<head>
		<?php include 'template/fichier-en-tete.php'; ?>
		<title>Patient - Fiche</title>
	</head>
	<body>
		<?php include 'template/en-tete.php'; ?>
		<section class="row jumbotron">
			<div class="container">
				<div class="container">
					<div class="">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
							<div class="container" style="padding-top: 15px;">
								<div class="panel panel-body">
									<h3 class="text-primary text-center"><strong>Dossier Medical</strong></h3><br>
									<h4 class="text-info">Nº DE DOSSIER : <em><?php echo $patient->getId(); ?></em></h4>
									<div class="col-sm-12">
										<div class="titre-fiche">
											<h4 class="text-center text-primary">IDENTIFICATION PATIENT</h4>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h5>Nom : .......<?php echo '<strong>'.strtoupper($patient->getNom()).'</strong>'; ?>.........</h5>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h5>Post-Nom : .........<?php echo '<strong>'.strtoupper($patient->getPostNom()).'</strong>'; ?>.........</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h5>Prénom : .............<?php echo '<strong>'.ucfirst($patient->getPrenom()).'</strong>'; ?>..............</h5>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h5>Sexe : ..........<?php echo '<strong>'.ucfirst($patient->getSexe()).'</strong>'; ?>..........</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h5>Date de naissance : ............<?php echo '<strong>'.ucfirst($patient->getDateNaissance()).'</strong>'; ?>...........</h5>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<h5>Numéro de Téléphone : ...........<?php echo '<strong>'.ucfirst($patient->getNumTel()).'</strong>'; ?>.......</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h5>Adresse : .........<?php echo '<strong>'.ucfirst($patient->getAdresse()).'</strong>'; ?>.........................................................................</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h5>GROUPE SANGUIN : .........<?php echo '<strong>'.strtoupper($parametres->getGroupeSanguin()).'</strong>'; ?>..................................................................................</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h5>NOM DU MEDECIN TRAITANT : .............................<?php echo '<strong>'.strtoupper($medecin->getNom()).'......'.strtoupper($medecin->getPostNom()).'......'.ucfirst($medecin->getPrenom()).'</strong>'; ?>...................</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h5>TRAITEMENT : .........<?php echo '<strong>'.ucfirst($parametres->getTraitement()).'</strong>'; ?>.................................................................</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h5>ALLERGIES : ......................................................<?php echo '<strong>'.ucfirst($parametres->getAllergies()).'</strong>'; ?>..........................................................</h5>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h5>ANTECEDENT : ......................................................<?php echo '<strong>'.ucfirst($parametres->getAntecedent()).'</strong>'; ?>........................................................</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>