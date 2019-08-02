<!DOCTYPE html>
<html>
	<head>
		<?php include 'template/fichier-en-tete.php'; ?>
		<title>Agenda</title>
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
		</section>
	</body>
</html>