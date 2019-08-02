<?php

?>

<header class="en-tete">
	<div class="container">
		<nav class="navabar navbar-default navbar-fixed-top">
			<div class="container container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".myNavbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="accueil.php" class="navbar-brand">Roosie</a>
				</div>
			
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- <form method="post" class="navbar-form navbar-left">
							<div class="input-group">
								<input type="text" name="recherche" placeholder="Recherhce" style="width: 400px" class="form-control" />
								<div class="input-group-btn">
									<button type="submit" name="search" class="btn btn-default">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</div>
							</div>
						</form> -->
						<li>
							<a href="../patient/home.php"><span class="glyphicon glyphicon-home"></span> Acceuil</a>
						</li>
						<li>
							<a href="../patient/patient.php"><span class="glyphicon glyphicon-plus-sign"></span> Patient</a>
						</li>
						<li>
							<a href="../comptabilite/index.php"><span class="glyphicon glyphicon-usd"></span> Comptabilite</a>
						</li>
						<li>
							<a href="../agenda/index.php"><span class="glyphicon glyphicon-calendar"></span> Agenda</a>
						</li>
						<li class="dropdown">
							<a href="../settings/index.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Parametres<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Admin</li>
								<li><a href="#">1</a></li>
								<li><a href="#">1</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>