<?php
	
	// include 'global/config.php';

	require CHEMIN_MODEL_MANAGER.'UserManager.class.php';
	require_once CHEMIN_MODEL_REPOSITORIES.'User.class.php';
	require_once CHEMIN_MODEL_REPOSITORIES.'Personne.class.php';
	require_once CHEMIN_BD.'PDO2.class.php';

	$bd = PDO2::getInstance();

	$userManager = new UserManager($bd);

	$user = new User;
	
	session_start();

	include CHEMIN_VUE.'index.php';
	
	
	// echo realpath('/');

	// echo __DIR__;

?>