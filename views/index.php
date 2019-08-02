<!DOCTYPE html>
<html>
	<head>
		<?php include 'template/fichier-en-tete.php'; ?>
		<link rel="stylesheet" type="text/css" href="assets/css/style-connexion.css" />
		<title>Login</title>
	</head>
	<body>
		<div class="row">
			<div class="form-connexion">
				<div class="col-md-5 col-md-offset-6 col-sm-5 col-sm-offset-6">
					<div class="panel panel-body">
						<p style="text-align: center;">
							<img src="views/assets/css/img/logo-upl.jpg" class="img-circle" width="135px">
						</p>
						<div class="login">
							<h4 style="text-align: center;">Connectez-vous à votre compte
							</h4><br>
						</div>
						<?php

							if (isset($_POST['login']))
							{
								if (isset($_POST['pseudo']) && isset($_POST['password']))
								{
									$pseudo = htmlspecialchars(stripslashes($_POST['pseudo']));
									$password = htmlspecialchars(stripslashes($_POST['password']));	
									$user = $userManager->connexion($pseudo, $password);

									if($user != null)
									{
										$_SESSION['id_user'] = $user->getId();
										$_SESSION['pseudo'] = $user->getPseudo();
										$_SESSION['photo_profil'] = $user->getPassword();
										header('Location: controller/patient/home.php');
									}else{
										echo '<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="alert alert-danger">
													<strong class="erreur">ERREUR :</strong> Pseudo ou mot de passe incorrect
													</div>
												</div>';
									}
								}
							}
						?>
						<div class="layout-form">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<form method="post" action="">
									<div class="form-group">
										<input type="text" name="pseudo" placeholder="Entrer votre pseudo" class="form-control" required />
									</div>
									<div class="form-group">
										<input type="password" name="password" placeholder="Entrer votre mot de passe" class="form-control" required />
									</div>
									<div class="form-group">
										<button type="submit" name="login" class="col-md-12 btn btn-success">Connexion</button><br><br>
									</div>
									<div class="row">
										<div class="col-md-5 col-sm-5">
											<p><a href="#">Mot de passe oublié</a></p>
										</div>
										<div class="col-md-7 col-sm-7">
											<div class="checkbox-inline">
												<input type="checkbox" name="" id="keep_active" class="checkbox"><label for="keep_active">Garder ma session active</label>
											</div> 
										</div>
									</div>
									<br>
								</form>
								<br>
								<div class="col-md-9 col-md-offset-3">
									<em>
										En vous connectant, vous acceptez nos <em style="text-decoration: underline;">termes et conditions générales</em>
									</em>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>