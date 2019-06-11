<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	
	public function chargeClass($classe)
	{
		require $classe.'class.php';
	}

	spl_autoload_register('chargeClass');

	class Medecin extends Personne
	{
		private $_matricule;
		private $_specialite;

		function __construct()
		{
			
		}
	
	    /**
	     * @return mixed
	     */
	    public function getMatricule()
	    {
	        return $this->_matricule;
	    }

	    /**
	     * @param mixed $_matricule
	     *
	     * @return self
	     */
	    public function setMatricule($matricule)
	    {
	        $this->_matricule = $matricule;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getSpecialite()
	    {
	        return $this->_specialite;
	    }

	    /**
	     * @param mixed $_specialite
	     *
	     * @return self
	     */
	    public function setSpecialite($specialite)
	    {
	        $this->_specialite = $specialite;

	        return $this;
	    }
	}
?>