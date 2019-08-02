<?php

	require '../global/config.php';

	require_once '../'.CHEMIN_MODEL_MANAGER.'ParametresPatientManager.class.php';
	require_once '../'.CHEMIN_MODEL_MANAGER.'PatientManager.class.php';
	require_once '../'.CHEMIN_MODEL_REPOSITORIES.'ParametresPatient.class.php';
	require_once '../'.CHEMIN_MODEL_REPOSITORIES.'Patient.class.php';
	require_once '../'.CHEMIN_BD.'PDO2.class.php';

	session_start();

	$patient = new Patient($_SESSION['donnees']);

	echo $patient->getNom();

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			include 'template/fichier-en-tete.php';
		?>
		<title>Patient</title>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<div id="bloc-page">
					<?php
						include 'template/en-tete.php';
					?>

					<section class="row">
						<div class="col-sm-5">
							<div class="panel panel-body">
								<p>
									<img src="assets/images/66e53b47258cc12_file.JPG" class="img-thumbnail"/>
								</p>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="panel panel-body">
								<div class="bto-">
									<h4 class="title-add-patient">Ajouter Les Parametres du patient</h4>
									<hr>
								</div>
								<form method="post" action="">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Poids<span class="etoile"> *</span></label>
												<input type="text" name="poids" class="form-control" placeholder="Poids" required="" aria-required="true">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Tension<span class="etoile"> *</span></label>
												<input type="text" name="tension" class="form-control" placeholder="Tension" required="" aria-required="true">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Temperature<span class="etoile"> *</span></label>
												<input type="text" name="temperature" class="form-control" placeholder="Temperature" required="" aria-required="true">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Groupe Sansuin<span class="etoile"> *</span></label>
												<select class="form-control" name="groupe_sanguin" required="">
													<option></option>
													<option value="groupe_a">A</option>
													<option value="groupe_b">B</option>
													<option value="groupe_ab">AB</option>
													<option value="groupe_o">O</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Traitement<span class="etoile"> *</span></label>
												<input type="text" name="traitement" class="form-control" placeholder="Traitement" required="" aria-required="true">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Numéro Abonnement<span class="etoile"> *</span></label>
												<input type="email" name="numAbonnement" class="form-control" placeholder="Numéro Abonnement" required="" aria-required="true">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Nombre des enfants<span class="etoile"> *</span></label>
												<div class="input-group">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-phone"></span>
														</div>
														<input type="hidden" name="MobilePrefix" value="">
														<input type="text" name="nbre_enfants" class="form-control" placeholder="Nombre des enfants" required="" aria-required="true">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Numéro chambre<span class="etoile"> *</span></label>
												<input type="text" name="num_chambre" class="form-control" placeholder="Numéro chambre" required="" aria-required="true">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Allergie<span class="etoile"> *</span></label><br>
												<div class="radio-inline" style="margin-left: 65px">
													<input type="radio" name="allergie" id="oui" value="oui" class="radio">
													<label for="oui">Oui</label>
												</div>
												<div class="radio-inline">
													<input type="radio" name="allergie" id="non" value="nom" class="radio">
													<label for="non">Non</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Antécédent<span class="etoile"> *</span></label><br>
												<div class="radio-inline" style="margin-left: 65px">
													<input type="radio" name="antecedent" id="yes" value="yes" class="radio">
													<label for="yes">Oui</label>
												</div>
												<div class="radio-inline">
													<input type="radio" name="antecedent" id="non" value="non" class="radio">
													<label for="non">Non</label>
												</div>
											</div>
										</div>
										<div class="row">
											<label>
												
											</label>
										</div>
										
											<button type="submit" class="col-xs-12 col-sm-12 col-lg-12 col-md-12 btn btn-default btn-success" name="enregistrer">Enregister</button>	
									</div>
								</form>
								<?php
									if (isset($_POST['enregistrer']))
									{
										if (isset($_POST['poids']) && !empty($_POST['poids']) && isset($_POST['tension']) && !empty($_POST['tension']) && isset($_POST['temperature']) && !empty($_POST['temperature']) && isset($_POST['groupe_sanguin']) && !empty($_POST['groupe_sanguin']) && isset($_POST['traitement']) && !empty($_POST['traitement']) && isset($_POST['numAbonnement']) && !empty($_POST['numAbonnement']) && isset($_POST['nbre_enfants']) && !empty($_POST['nbre_enfants']) && isset($_POST['num_chambre']) && !empty($_POST['num_chambre']) && isset($_POST['allergie']) && !empty($_POST['allergie']) && isset($_POST['antecedent']) && !empty($_POST['antecedent'])) 
										{
											$poids = htmlspecialchars(stripslashes($_POST['poids']));
											$tension = htmlspecialchars(stripslashes($_POST['tension']));
											$temperature = htmlspecialchars(stripslashes($_POST['temperature']));
											$groupeSanguin = htmlspecialchars(stripslashes($_POST['groupe_sanguin']));
											$traitement = htmlspecialchars(stripslashes($_POST['traitement']));
											$numAbonnement = htmlspecialchars(stripslashes($_POST['numAbonnement']));
											$nbreEnfants = htmlspecialchars(stripslashes($_POST['nbre_enfants']));
											$numChambre = htmlspecialchars(stripslashes($_POST['num_chambre']));
											$allergie = htmlspecialchars(stripslashes($_POST['allergie']));
											$antecedent = htmlspecialchars(stripslashes($_POST['antecedent']));

											$infos = array();
											$infos[] = $poids;
											$infos[] = $tension;
											$infos[] = $temperature;
											$infos[] = $groupeSanguin;
											$infos[] = $traitement;
											$infos[] = $numAbonnement;
											$infos[] = $nbreEnfants;
											$infos[] = $numChambre;
											$infos[] = $allergie;
											$infos[] = $antecedent;


											// $patient = new Patient($donnees);
											
											// $patientManager = new PatientManager(PDO2::getInstance());

											// $patientManager->create($patient);

											// $parametresPatient = new ParametresPatient($infos);
											
											// $patientManager = new PatientManager(PDO2::getInstance());

											// $patientManager->create($parametresPatient);

											// header('Location: patient.php');
											
										}else{
											echo "Veuillez remplir toutes les cases";
										}
									}
								?>
							</div>
						</div>
					</section>

					<footer class="row">
						
					</footer>
				</div>
			</div>
		</div>
	</body>
</html>