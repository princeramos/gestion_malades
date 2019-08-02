<?php
	
	/**
     *
     * @author Prince Ramos
	 */
    require_once 'Patient.class.php';
    
	class ParametresPatient extends Patient
	{

        function __construct(array $donnees)
        {
            $this->hydrate($donnees);
        }
    
    }
?>