<?php


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
									<img src="assets/images/infirmière-en-prévention.JPG" class="img-thumbnail"/>
								</p>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="panel panel-body">
								<div class="bto-">
									<h4 class="title-add-patient">Ajouter un patient</h4>
									<hr>
								</div>
								<form method="post" action="">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Nom<span class="etoile"> *</span></label>
												<input type="text" name="nom" class="form-control" placeholder="Nom" required="" aria-required="true">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Post-Nom<span class="etoile"> *</span></label>
												<input type="text" name="postNom" class="form-control" placeholder="Post-Nom" required="" aria-required="true">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Prénom<span class="etoile"> *</span></label>
												<input type="text" name="prenom" class="form-control" placeholder="Prénom" required="" aria-required="true">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Sexe<span class="etoile"> *</span></label>
												<select class="form-control" name="sexe" required="">
													<option value="homme">Homme</option>
													<option value="femme">Femme</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Date de Naissance<span class="etoile"> *</span></label>
												<div class="input-group">
													<input type="date" name="prenom" class="form-control" required="" aria-required="true">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-th"></span>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Email<span class="etoile"> *</span></label>
												<input type="email" name="email" class="form-control" placeholder="Adresse e-mail" required="" aria-required="true">
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
														<input type="text" name="num_tel" class="form-control" placeholder="Numéro de téléphone" required="" aria-required="true">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Adresse<span class="etoile"> *</span></label>
												<input type="text" name="adresse" class="form-control" placeholder="Adresse" required="" aria-required="true">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Carte abonnement<span class="etoile"> *</span></label>
												<input type="text" name="nom" class="form-control" placeholder="Numéro carte abonnement" required="" aria-required="true">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label>Etat civil<span class="etoile"> *</span></label>
												<select class="form-control" name="sexe" required="">
													<option value="celibataire">Célibataire</option>
													<option value="marie">Marié(e)</option>
												</select>
											</div>
										</div>
										<div class="row">
											<label>
												
											</label>
										</div>
										
											<button type="submit" class="col-xs-12 col-sm-12 col-lg-12 col-md-12 btn btn-default btn-success" name="enregistrer">Enregister</button>
										
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