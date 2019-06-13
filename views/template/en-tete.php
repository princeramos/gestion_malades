<?php

?>

<header class="en-tete">
	<div class="container">
		<nav class="navabar navbar-default navbar-fixed-top">
			<div class="container container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Roosie</a>
				</div>
			
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<form method="post" class="navbar-form navbar-left">
							<div class="input-group">
								<input type="text" name="recherche" placeholder="Recherhce" style="width: 400px" class="form-control" />
								<div class="input-group-btn">
									<button type="submit" name="search" class="btn btn-default">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</div>
							</div>
						</form>
						<li><a href="accueil.php">Acceuil</a></li>
						<li><a href="#">Agenda</a></li>
						<li><a href="add-patient.php">Patient</a></li>
						<li><a href="#">Comptabilite</a></li>
						<li><a href="#">Parametrages</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>