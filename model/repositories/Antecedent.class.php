<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	
	require 'autoload.php';

	class Antecedent 
	{
		private $_id;
		private $_idPatient;
		private $_dateDebut;
		private $_dateFin;
		private $_description;

		function __construct()
		{
			# code...
		}
	
	    /**
	     * @return mixed
	     */
	    public function getId()
	    {
	        return $this->_id;
	    }

	    /**
	     * @param mixed $_id
	     *
	     * @return self
	     */
	    public function setId($id)
	    {
	        $this->_id = $id;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getIdPatient()
	    {
	        return $this->_idPatient;
	    }

	    /**
	     * @param mixed $_idPatient
	     *
	     * @return self
	     */
	    public function setIdPatient($idPatient)
	    {
	        $this->_idPatient = $idPatient;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDateDebut()
	    {
	        return $this->_dateDebut;
	    }

	    /**
	     * @param mixed $_dateDebut
	     *
	     * @return self
	     */
	    public function setDateDebut($dateDebut)
	    {
	        $this->_dateDebut = $dateDebut;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDateFin()
	    {
	        return $this->_dateFin;
	    }

	    /**
	     * @param mixed $_dateFin
	     *
	     * @return self
	     */
	    public function setDateFin($dateFin)
	    {
	        $this->_dateFin = $dateFin;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDescription()
	    {
	        return $this->_description;
	    }

	    /**
	     * @param mixed $_description
	     *
	     * @return self
	     */
	    public function setDescription($description)
	    {
	        $this->_description = $description;

	        return $this;
	    }
}
?>