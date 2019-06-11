<?php
	
	// Identifiants pour la base de données.
	define('SQL_DSN', 'mysql:host=localhost;dbname=bd_gestion_dossiers_malades;charset=utf8');
	define('SQL_USERNAME', 'root');
	define('SQL_PASSWORD', '');

	// Chemins à utiliser pour accéder aux vues/modeles/controlleurs
	define('CHEMIN_VUE', 'views/');
	define('CHEMIN_MODEL', 'model/');
	define('CHEMIN_MODEL_MANAGER', 'model/manager/');
	define('CHEMIN_MODEL_REPOSITORIES', 'model/repositories/');
	define('CHEMIN_BD', 'model/bd/');
	define('CHEMIN_GLOBAL', 'global/');
	define('CHEMIN_CONTROLLER', 'controller/');
?>