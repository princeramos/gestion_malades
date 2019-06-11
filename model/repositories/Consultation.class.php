<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class Consultation
	{
		
		private $_id;
		private $_idPatient;
		private $_idMedecin;
		private $_type;
		private $_date;
		private $_dateRendezVous;
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
	    public function getIdMedecin()
	    {
	        return $this->_idMedecin;
	    }

	    /**
	     * @param mixed $_idMedecin
	     *
	     * @return self
	     */
	    public function setIdMedecin($idMedecin)
	    {
	        $this->_idMedecin = $idMedecin;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getType()
	    {
	        return $this->_type;
	    }

	    /**
	     * @param mixed $_type
	     *
	     * @return self
	     */
	    public function setType($type)
	    {
	        $this->_type = $type;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDate()
	    {
	        return $this->_date;
	    }

	    /**
	     * @param mixed $_date
	     *
	     * @return self
	     */
	    public function setDate($date)
	    {
	        $this->_date = $date;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDateRendezVous()
	    {
	        return $this->_dateRendezVous;
	    }

	    /**
	     * @param mixed $_dateRendezVous
	     *
	     * @return self
	     */
	    public function setDateRendezVous($dateRendezVous)
	    {
	        $this->_dateRendezVous = $dateRendezVous;

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