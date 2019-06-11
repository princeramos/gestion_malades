<?php

	require 'global/config.php';

	if(!isset($_GET['section']) || $_GET['section'] == 'index')
	{
		include_once CHEMIN_CONTROLLER.'index.php';
	}else{
		echo "Merde";
	}
	
	
	// include '/global/config.php';

	// include CHEMIN_MODEL.'Form.class.php';

	// $nom_form = new Form('identifiant_unique');

	// $nom_form->method('POST');
	// $nom_form->add('text', 'nom')->label('Votre nom : ');
	// $nom_form->add('text', 'prenom');

	// echo $nom_form;