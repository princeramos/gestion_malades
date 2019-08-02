<?php
	if (isset($_POST['modifier']))
	{
		if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['postNom']) && !empty($_POST['postNom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['sexe']) && !empty($_POST['sexe']) && isset($_POST['dateNaissance']) && !empty($_POST['dateNaissance']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['num_tel']) && !empty($_POST['num_tel']) && isset($_POST['adresse']) && !empty($_POST['adresse']) && isset($_POST['carteAbonnement']) && !empty($_POST['carteAbonnement']) && isset($_POST['etatCivil']) && !empty($_POST['etatCivil']) && isset($_POST['profession']) && !empty($_POST['profession']) && isset($_POST['numAssurance']) && !empty($_POST['numAssurance'])) 
		{
			$nom = htmlspecialchars(stripslashes($_POST['nom']));
			$postNom = htmlspecialchars(stripslashes($_POST['postNom']));
			$prenom = htmlspecialchars(stripslashes($_POST['prenom']));
			$sexe = htmlspecialchars(stripslashes($_POST['sexe']));
			$dateNaissance = htmlspecialchars(stripslashes($_POST['dateNaissance']));
			$email = htmlspecialchars(stripslashes($_POST['email']));
			$numTel = htmlspecialchars(stripslashes($_POST['num_tel']));
			$adresse = htmlspecialchars(stripslashes($_POST['adresse']));
			$carteAbonnement = htmlspecialchars(stripslashes($_POST['carteAbonnement']));
			$etatCivil = htmlspecialchars(stripslashes($_POST['etatCivil']));
			$profession = htmlspecialchars(stripslashes($_POST['profession']));
			$numAssurance = htmlspecialchars(stripslashes($_POST['numAssurance']));

			$donnees = array('id' => $id,'nom' => $nom, 'postNom' => $postNom, 'prenom' => $prenom, 'sexe' => $sexe, 'dateNaissance' => $dateNaissance, 'email' => $email, 'numTel' => $numTel, 'adresse' => $adresse, 'carteAbonnement' => $carteAbonnement, 'etatCivil' => $etatCivil, 'profession' => $profession, 'numAssurance' => $numAssurance);
			$patient = new Patient($donnees);

			$patientManager = new PatientManager(PDO2::getInstance());
			$patientManager->update($patient);


			header('Location: patient.php');
			
		}else{
			echo "Veuillez remplir toutes les cases";
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			include 'template/fichier-en-tete.php';
		?>
		<title>Patient - Modifier</title>
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
									<img src="../../views/assets/images/infirmière-en-prévention.JPG" class="img-thumbnail"/>
								</p>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="panel panel-body">
								<div class="bto-">
									<h4 class="title-add-patient">Mofidier les informations du patient</h4>
									<hr>
								</div>
								<form method="post" action="">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Nom<span class="etoile"> *</span></label>
												<input type="text" name="nom" class="form-control" placeholder="Nom" required="" aria-required="true" value="<?php echo ucfirst($patient->getNom()); ?>">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Post-Nom<span class="etoile"> *</span></label>
												<input type="text" name="postNom" class="form-control" placeholder="Post-Nom" required="" aria-required="true" value="<?php echo ucfirst($patient->getPostNom()); ?>">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Prénom<span class="etoile"> *</span></label>
												<input type="text" name="prenom" class="form-control" placeholder="Prénom" required="" aria-required="true" value="<?php echo ucfirst($patient->getPrenom()); ?>">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Sexe<span class="etoile"> *</span></label>
												<select class="form-control" name="sexe" required="">
													<option value="<?php echo ucfirst($patient->getSexe()); ?>" selected><?php echo ucfirst($patient->getSexe()); ?></option>
													<option value="homme">Homme</option>
													<option value="femme">Femme</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Date de Naissance<span class="etoile"> *</span></label>
												<div class="input-group">
													<input type="date" name="dateNaissance" class="form-control" required="" aria-required="true" value="<?php echo ucfirst($patient->getDateNaissance()); ?>">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-th"></span>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Email<span class="etoile"> *</span></label>
												<input type="email" name="email" class="form-control" placeholder="Adresse e-mail" required="" aria-required="true" value="<?php echo ucfirst($patient->getEmail()); ?>">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Numéro de téléphone<span class="etoile"> *</span></label>
												<div class="input-group">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-phone"></span>
														+243 </div>
														<input type="hidden" name="MobilePrefix" value="243">
														<input type="text" name="num_tel" class="form-control" placeholder="Numéro de téléphone" required="" aria-required="true" value="<?php echo ucfirst($patient->getNumTel()); ?>">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Adresse<span class="etoile"> *</span></label>
												<input type="text" name="adresse" class="form-control" placeholder="Adresse" required="" aria-required="true" value="<?php echo ucfirst($patient->getAdresse()); ?>">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Carte abonnement<span class="etoile"> *</span></label>
												<input type="text" name="carteAbonnement" class="form-control" placeholder="Numéro carte abonnement" required="" aria-required="true" value="<?php echo ucfirst($patient->getNumCarteAbonnement()); ?>">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Etat civil<span class="etoile"> *</span></label>
												<select class="form-control" name="etatCivil" required="">
													<option value="<?php echo ucfirst($patient->getStatutMatrimonial()); ?>"><?php echo ucfirst($patient->getStatutMatrimonial()); ?></option>
													<option value="celibataire">Célibataire</option>
													<option value="marie">Marié(e)</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Profession<span class="etoile"> *</span></label>
												<input type="text" name="profession" class="form-control" placeholder="Profession" required="" aria-required="true" value="<?php echo ucfirst($patient->getProfession()); ?>">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Numéro d'assurance social<span class="etoile"> *</span></label>
												<input type="text" name="numAssurance" class="form-control" placeholder="Numéro d'assurance social" required="" aria-required="true" value="<?php echo ucfirst($patient->getNumAssurance()); ?>">
											</div>
										</div>
										
											<button type="submit" class="col-xs-12 col-sm-12 col-lg-12 col-md-12 btn btn-default btn-warning" name="modifier">Enregister</button>	
									</div>
								</form>
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