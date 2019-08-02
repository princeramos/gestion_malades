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
									<h5><strong><em>Dossier du Patient Nº <?php echo $patient->getId(); ?></em></strong></h5>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<div class="list-inline">
														<h4 class="en-ligne">Dossier Nº <?php echo $patient->getId(); ?></h4>
														<h4 class="en-ligne pull-right">
															<a href="fiche-patient.php?id=<?php echo $patient->getId();?>" title="Voir la fiche compléte du patient" class="btn btn-success "><span class="glyphicon glyphicon-arrow-right"></span> Voir plus</a>
															
														</h4>
													</div>
												</div>
												<div class="panel-body">
													<table class="table table-bordered table-striped table-condensed">
														<tr>
															<th>Nom</th>
															<th>Prénom</th>
															<th>Date de Naissance</th>
															<th>Sexe</th>
														</tr>
														<tr>
															<td class="text-center"><?php echo ucfirst($patient->getNom()); ?></td>
															<td class="text-center"><?php echo ucfirst($patient->getPrenom()); ?></td>
															<td class="text-center"><?php echo $patient->getDateNaissance(); ?></td>
															<td class="text-center"><?php echo ucfirst($patient->getSexe()); ?></td>
														</tr>
													</table>
													<div class="btn-group pull-right">
														<a href="fiche-patient.php?id=<?php echo $patient->getId();?>" class="btn btn-success" title="Voir les informations du patient">Voir</a>
														<a href="update-patient.php?id=<?php echo $patient->getId();?>" class="btn btn-info" title="Modifier les informations du patient">Modifier</a>
														<a href="delete-patient.php?id=<?php echo $patient->getId();?>" class="btn btn-warning" title="Supprimer les informations du patient">Supprimer</a>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<div class="list-inline">
														<h4 class="en-ligne">Consultation</h4>
														<h4 class="en-ligne pull-right">
															<a href="fiche-consultation.php?id=<?php echo $patient->getId();?>" title="Voir la fiche compléte du patient" class="btn btn-success "><span class="glyphicon glyphicon-arrow-right"></span> Voir plus</a>
															
														</h4>
													</div>
												</div>
												<div class="panel-body">
													<?php
														if($consultation != null)
														{ ?>
															<table class="table table-bordered table-striped table-condensed">
																<tr>
																	<th>Nom médecin</th>
																	<th>Type</th>
																	<th>Consulté le</th>
																	<th>Description</th>
																	<th>Rendez-vous</th>
																</tr>
																<tr>
																	<td class="text-center"><?php echo ucfirst($medecin->getNom()); ?></td>
																	<td class="text-center"><?php echo ucfirst($consultation->getType()); ?></td>
																	<td class="text-center"><?php echo ucfirst($consultation->getDateConsultation()); ?></td>
																	<td class="text-center"><?php echo ucfirst($consultation->getDescription()); ?></td>
																	<td class="text-center"><?php echo ucfirst($consultation->getDateConsultation()); ?></td>
																</tr>
															</table>

														<?php }else{
															?>
																<div class="alert alert-dismissable">
																	<h4 class="text-center">
																		<em class="text-info">
																			Aucune information disponible sur patient
																		</em>
																	</h4>
																</div>
														<?php 
														}
													?>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<div class="list-inline">
														<h4 class="en-ligne">Visites</h4>
														<h4 class="en-ligne pull-right">
															
																<a href="add-visitor.php?id=<?php echo $patient->getId();?>" title="Ajouter un visiteur" class="btn btn-success "><span class="glyphicon glyphicon-plus"></span> Ajouter</a>
															
														</h4>
													</div>
												</div>
												<div class="panel-body">
													<?php

														if ($visiteur != null)
														{ ?>
															<table class="table table-bordered table-striped table-condensed">
																<tr>
																	<th>Nom</th>
																	<th>Prenom</th>
																	<th>Post-Nom</th>
																	<th>Sexe</th>
																	<th>Adresse</th>
																	<th>Téléphone</th>
																</tr>
																<tr>
																	<td class="text-center">
																		<?php echo ucfirst($visiteur->getNom()); ?>
																	</td>
																	<td class="text-center">
																		<?php echo ucfirst($visiteur->getPostNom()); ?>
																	</td>
																	<td class="text-center">
																		<?php echo ucfirst($visiteur->getPrenom()); ?>
																	</td>
																	<td class="text-center">
																		<?php echo ucfirst($visiteur->getSexe()); ?>
																	</td>
																	<td class="text-center">
																		<?php echo ucfirst($visiteur->getAdresse()); ?>
																	</td>
																	<td class="text-center">
																		<?php echo $visiteur->getNumTel(); ?>
																	</td>
																</tr>
															</table>
															<div class="btn-group pull-right">
																<a href="" class="btn btn-default" title="Premier visiteur">
																	<span class="glyphicon glyphicon-fast-backward"></span>
																</a>
																<a href="" class="btn btn-default" title="Précédent visiteur">
																	<span class="glyphicon glyphicon-step-backward"></span>
																</a>
																<a href="" class="btn btn-default" title="Suivant visiteur">
																	<span class="glyphicon glyphicon-step-forward"></span>
																</a>
																<a href="" class="btn btn-default" title="Dernier visiteur">
																	<span class="glyphicon glyphicon-fast-forward"></span>
																</a>
															</div>	
														<?php }else{
															?>
																<div class="alert alert-dismissable">
																	<h4 class="text-center">
																		<em class="text-info">
																			Le patient n'a pas encore eu des visites.
																		</em>
																	</h4>
																</div>
														<?php 
														}
													?>
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="panel-primary">
												<div class="panel-heading">
													<div class="list-inline">
														<h4 class="en-ligne">Information </h4>
														<h4 class="en-ligne pull-right">
															<a href="fiche-consultation.php?id=<?php echo $patient->getId();?>" title="Voir la fiche compléte du patient" class="btn btn-success "><span class="glyphicon glyphicon-arrow-right"></span> Voir plus</a>
															
														</h4>
													</div>
												</div>
												<div class="panel-body">
													<?php
														if ($parametres != null)
														{ ?>
															<table class="table table-bordered table-striped table-condensed">
																<tr>
																	<th>Nº chambre</th>
																	<th>Poids</th>
																	<th>Tension</th>
																	<th>Temperature</th>
																	<th>Groupe sanguin</th>
																</tr>
																<tr>
																	<td class="text-center"><?php echo ucfirst($parametres->getNumChambre()); ?></td>
																	<td class="text-center"><?php echo ucfirst($parametres->getPoids()). ' Kg'; ?></td>
																	<td class="text-center"><?php echo ucfirst($parametres->getTension()). ' °'; ?></td>
																	<td class="text-center"><?php echo ucfirst($parametres->getTemperature()). ' °'; ?></td>
																	<td class="text-center"><?php echo ucfirst($parametres->getGroupeSanguin()); ?></td>
																</tr>
															</table>
														<?php }else{
																?>
																<div class="alert alert-dismissable">
																	<h4 class="text-center">
																		<em class="text-info">
																			Aucune information disponible sur patient
																		</em>
																	</h4>
																</div>
														<?php }
													?>	
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


