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
	require_once '../../'.CHEMIN_MODEL_REPOSITORIES.'medecin.class.php';
	require_once '../../'.CHEMIN_BD.'PDO2.class.php';

	$bd = new PDO2();

	$patientManager = new PatientManager($bd::getInstance());
	$parametresPatientManager = new ParametresPatientManager($bd::getInstance());
	$consultationManager = new ConsultationManager($bd::getInstance());
	$visiteurManager = new VisiteurManager($bd::getInstance());
	$medecinManager = new MedecinManager($bd::getInstance());

	
	$consultation = $consultationManager->getLast();
	$visiteur = $visiteurManager->getLast();
	$parametres = $parametresPatientManager->getLast();
	// $medecin = $medecinManager->getLast();
	$medecin = $medecinManager->find($consultation->getIdMedecin());

	if (isset($_GET['id']))
	{
		$id = htmlspecialchars(stripslashes($_GET['id']));
		$patient = $patientManager->find($id);
		include '../../'.CHEMIN_VUE.'fiche-patient.php';
	}else{
		echo "error";
	}
	
?>