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

	$patientManager = new PatientManager($bd::getInstance());
	$parametresPatientManager = new ParametresPatientManager($bd::getInstance());
	$consultationManager = new ConsultationManager($bd::getInstance());
	$visiteurManager = new VisiteurManager($bd::getInstance());
	$medecinManager = new MedecinManager($bd::getInstance());

	// $patient = $patientManager->getLast();
	// $consultation = $consultationManager->find($patient->getId());
	// $visiteur = $visiteurManager->find($patient->getId());
	

	if (isset($_GET['id']))
	{
		$id = htmlspecialchars(stripslashes($_GET['id']));
		$consultation = $consultationManager->find($id);

		if ($consultation != null)
		{
			$parametres = $parametresPatientManager->find($patient->getId());
			$medecin = $medecinManager->getLast();
			$medecin = $consultationManager->getMedecin($consultation->getIdMedecin());
			include_once '../../'.CHEMIN_VUE.'fiche-consultation.php';
		}else{
			header('Location: home.php');
		}
	}

	
?>