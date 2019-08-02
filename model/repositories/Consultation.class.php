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
		private $_dateConsultation;
		private $_dateRendezVous;
		private $_description;

		public function __construct(array $donnees)
		{
			$this->hydrate($donnees);
		}

		 public function hydrate(array $donnees)
		{
			foreach ($donnees as $key => $value)
			{
				$method = 'set'.ucfirst($key);

				if (method_exists($this, $method)) 
				{
					$this->$method($value);
				}
			}
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
	    public function setId($_id)
	    {
	        $this->_id = $_id;

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
	    public function setIdPatient($_idPatient)
	    {
	        $this->_idPatient = $_idPatient;

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
	    public function setIdMedecin($_idMedecin)
	    {
	        $this->_idMedecin = $_idMedecin;

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
	    public function setType($_type)
	    {
	        $this->_type = $_type;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDateConsultation()
	    {
	        return $this->_dateConsultation;
	    }

	    /**
	     * @param mixed $_dateConsultation
	     *
	     * @return self
	     */
	    public function setDateConsultation($_dateConsultation)
	    {
	        $this->_dateConsultation = $_dateConsultation;

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
	    public function setDateRendezVous($_dateRendezVous)
	    {
	        $this->_dateRendezVous = $_dateRendezVous;

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
	    public function setDescription($_description)
	    {
	        $this->_description = $_description;

	        return $this;
	    }
	}
?>