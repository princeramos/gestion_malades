<?php

	require_once '../../global/config.php';
	
	require_once '../../'.CHEMIN_MODEL_MANAGER.'UserManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'PatientManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'ParametresPatientManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'VisiteurManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'ConsultationManager.class.php';
	require_once '../../'.CHEMIN_MODEL_MANAGER.'MedecinManager.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'Patient.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'Visiteur.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'ParametresPatient.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'Consultation.class.php';
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'Medecin.class.php';
	require_once '../../'.CHEMIN_BD.'PDO2.class.php';

	$bd = new PDO2();

	$patientManager = new PatientManager(PDO2::getInstance());
	$parametresPatientManager = new ParametresPatientManager(PDO2::getInstance());
	$consultationManager = new ConsultationManager(PDO2::getInstance());
	$visiteurManager = new VisiteurManager(PDO2::getInstance());
	$medecinManager = new MedecinManager(PDO2::getInstance());
	

	if (isset($_GET['id']))
	{
		$id = htmlspecialchars(stripslashes($_GET['id']));
		$patient = $patientManager->find($id);

		if ($patient != null)
		{
			
			include_once '../../'.CHEMIN_VUE.'update-patient.php';
		}else{
			header('Location: home.php');
		}
	}
?>