<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style-connexion.css" />

		<title>Login</title>
	</head>
	<body>
		<div id="page-connexion">
			<header>
				<p class="name-app">Gestion des dossiers des Patients</p>
				<h4 class="name-hopital"><em>Hopital de la Référence de la Kenya</em></h4>
			</header>

			<div class="corps">
				<div class="row">
					<div class="col-sm-offset-3 col-sm-6">
						<div class="form-connexion">
							<form method="post" action="" class="well layout-form">
								<div class="login">
									<h4>Connexion</h4>
									<p>
										<img src=""/>
									</p>
								</div>
								<div class="input-group col-xs-10">
									<span class="input-group-addon">Pseudo</span>
									<input type="text" name="pseudo" placeholder="Entrer votre pseudo" class="form-control" required />
								</div>
								<div class="input-group col-xs-10 espace-input">
									<span class="input-group-addon">Mot de Passe</span>
									<input type="password" name="password" placeholder="Entrer votre mot de passe" class="form-control" required /><br>
								</div>
								<br>
								<div class="btn pull-right espace-input">
									<button type="reset" name="" class="btn btn-success">Annuler</button>
									<button type="submit" name="login" class="btn btn-success">Connexion</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="pied">
				<em class="licensed">LICENSED : HOPITAL DE REFERENCE DE LA KENYA</em>
				<em class="pull-right powerd-by">POWERD BY : <span class="powerd-by-name">RAMOSOFT</span></em>
			</div>
		</div>
	</body>
</html>