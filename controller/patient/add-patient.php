<?php
	
	require_once '../../global/config.php';
	
	require_once '../../'.CHEMIN_MODEL_MANAGER.'UserManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'PatientManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'ParametresPatientManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'VisiteurManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'ConsultationManager.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'Patient.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'Visiteur.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'ParametresPatient.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'Consultation.class.php';
	require_once '../../'.CHEMIN_BD.'PDO2.class.php';

	include '../../'.CHEMIN_VUE.'add-patient.php';
?>