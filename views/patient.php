<!DOCTYPE html>
<html>
	<head>
		<?php
			include 'template/fichier-en-tete.php';
		?>
		<title>Patient</title>
	</head>
	<body>
		<?php
			include 'template/en-tete.php';
		?>
		<section class="row">
			<div class="recherche">
				<div class="container">
					<div class="row" style="padding-top: 45px; padding-bottom: 15px;">
	<div class="col-lg-3 col-md-3 col-sm-4">
		<h4>Hopital Ref Kenya</h4>
	</div>
	<div class="col-lg-7 col-md-7 col-sm-6">
		<form method="post" action="">
			<div class="input-group">
				<input type="text" name="recherche_patient" class="form-control" placeholder="Chercher un Patient" />
				<div class="input-group-btn">
					<button type="submit" name="search" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-2 col-sm-2 col-xs-2">
		<a href="add-patient.php" class="btn btn-success" title="Ajouter un nouveau patient">
			<span class="glyphicon glyphicon-plus"> Ajouter</span>	
		</a>
	</div>
</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						
					</div>
					<div class="col-md-8">
						<div class="panel panel-body recherche-patient">
							<h4>RECHERCHE DES PATIENTS</h4>
							<hr/>
							<form method="post">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group row">
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="form-inline">
												<div class="col-sm-1 col-md-2 label-form-recherche">
													<label>Age</label>	
												</div>
												<div class="col-sm-3 col-md-3">
													<select name="by_age" class="form-control-perso recherche-patient">
														<option value="0-1">
															0 mois à 1 an 
														</option>
														<option value="1-5">
															1 an à 5 ans
														</option>
														<option value="5-15">
															5 ans à 12 ans
														</option>
														<option value="12-21">
															12 ans à 25 ans
														</option>
														<option value="26-35">
															26 ans à 35 ans
														</option>
														<option value="">
															35 ou plus
														</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="form-inline">
												<div class="col-sm-1 col-md-2 label-form-recherche">
													<label>sexe</label>	
												</div>
												<div class="col-sm-3">
													<select name="by_age" class="form-control-perso recherche-patient">
														<option value="masculin">
															Masculin
														</option>
														<option value="féminin">
															Féminin
														</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="form-inline">
												<div class="col-sm-2 col-md-4 label-form-recherche">
													<label>Abonné(e)</label>	
												</div>
												<div class="col-sm-2 col-md-1">
													<select name="by_age" class="form-control-perso recherche-patient">
													<option value="ramosft">	Ramosoft
													</option>
													<option value="rwashi">
														Rwashi
													</option>
													<option value="mmg">
														MMG
													</option>
													<option value="pullman">
														Pullman Karavia
													</option>
													<option value="gecamines">
														Gecamines
													</option>
													<option value="rosie">
														Rosie Business
													</option>
												</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="form-inline">
												<div class="col-sm-3 col-md-5 label-form-recherche">
													<label>Etat civil</label>	
												</div>
												<div class="col-sm-3">
													<select name="by_age" class="form-control recherche-patient">
													<option value="célibataire">
														Célibataire
													</option>
													<option value="marié">
														Marié(e)
													</option>
													<option value="divorcé">
														Divorcé
													</option>
													<option value="veuf">
														veuf
													</option>
													<option value="veuve">
														veuve
													</option>
												</select>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="form-inline">
												<div class="col-sm-4 col-md-4 label-form-recherche">
													<label>Chambre</label>	
												</div>
												<div class="col-sm-3 col-md-3">
													<input type="text" name="num_chambre" placeholder="Chambre" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="btn-toolbar">
												<div class="col-xs-4 col-sm-4 col-sm-offset-1 ">
													<button type="submit" class="btn btn-success btn-md" name="rechercher-par-detail">Recherche</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div>
						<div class="row">
							<?php
								if (isset($_POST['search']))
								{ ?>
									<table class="table table-responsive table-bordered table-condensed table-striped">
										<tr>
											<th style="text-align: center;">Nº</th>
											<th style="text-align: center;">Nom</th>
											<th style="text-align: center;">Post-Nom</th>
											<th style="text-align: center;">Prénom</th>
											<th style="text-align: center;">Sexe</th>
											<th style="text-align: center;">Nº Chambre</th>
											<th style="text-align: center;">Nº Chambre</th>
											<th style="text-align: center;">Nº Chambre</th>
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
												<div class="btn-group">
													<a href="fiche-patient.php" class="btn btn-success" title="voir">
														<span class="glyphicon glyphicon-play"></span>
													</a>
													<a href="update-patient.php" class="btn btn-info" title="modifier">
														<span class="glyphicon glyphicon-pencil"></span>
													</a>

													<a href="#" class="btn btn-danger" title="supprimer">
														<span class="glyphicon glyphicon-trash"></span>
													</a>
												</div>
											</td>
										</tr>
									</table>
								<?php }else if(isset($_POST['rechercher-par-detail'])){
									?>
									<table class="table table-responsive table-bordered table-condensed table-striped">
										<tr>
											<th style="text-align: center;">Nº</th>
											<th style="text-align: center;">Nom</th>
											<th style="text-align: center;">Post-Nom</th>
											<th style="text-align: center;">Prénom</th>
											<th style="text-align: center;">Sexe</th>
											<th style="text-align: center;">Nº Chambre</th>
											<th style="text-align: center;">Nº Chambre</th>
											<th style="text-align: center;">Nº Chambre</th>
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
												<div class="btn-group">
													<a href="fiche-patient.php" class="btn btn-success" title="voir">
														<span class="glyphicon glyphicon-play"></span>
													</a>
													<a href="update-patient.php" class="btn btn-info" title="modifier">
														<span class="glyphicon glyphicon-pencil"></span>
													</a>

													<a href="#" class="btn btn-danger" title="supprimer">
														<span class="glyphicon glyphicon-trash"></span>
													</a>
												</div>
											</td>
										</tr>
									</table>
								<?php }else{
									?>
									<table class="table table-responsive table-bordered table-condensed table-striped">
										<tr>
											<th style="text-align: center;">Nº</th>
											<th style="text-align: center;">Nom</th>
											<th style="text-align: center;">Post-Nom</th>
											<th style="text-align: center;">Prénom</th>
											<th style="text-align: center;">Sexe</th>
											<th style="text-align: center;">Nº Chambre</th>
											<th style="text-align: center;">Nº Chambre</th>
											<th style="text-align: center;">Nº Chambre</th>
											<th style="text-align: center;">Action</th>
										</tr>
										<?php
											$patients[] = $patientManager->getAll();
											print_r($patients);
											//s$donnees = array($patients['']);
											foreach ($patients as $patient) {
												// $patient = new Patient(); 
												?>
												<tr>
													<td style="text-align: center;">
														
													</td>
													<td style="text-align: center;">
														<?php echo ucfirst($patient->getId()); ?> 
													</td>
													<td style="text-align: center;">
														<?php echo ucfirst($patient->getPostNom()); ?>
													</td>
													<td style="text-align: center;">
														
													</td>
													<td style="text-align: center;">
														<?php echo $patient->getPrenom(); ?>
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
														<div class="btn-group">
															<a href="fiche-patient.php" class="btn btn-success" title="voir">
																<span class="glyphicon glyphicon-play"></span>
															</a>
															<a href="update-patient.php" class="btn btn-info" title="modifier">
																<span class="glyphicon glyphicon-pencil"></span>
															</a>

															<a href="#" class="btn btn-danger" title="supprimer">
																<span class="glyphicon glyphicon-trash"></span>
															</a>
														</div>
													</td>
												</tr><?php
											}	
										?>
										
									</table>
								<?php }
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
			include 'template/pieds.php';
		?>
	</body>
</html>