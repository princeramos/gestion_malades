<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */
	class Schedule
	{
		private $_id;
		private $_idMedecin;
		private $_jour;
		private $_heureDebut;
		private $_heureFin;
		private $_observation;

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
	    public function setId($_id)
	    {
	        $this->_id = $_id;

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
	    public function getJour()
	    {
	        return $this->_jour;
	    }

	    /**
	     * @param mixed $_jour
	     *
	     * @return self
	     */
	    public function setJour($_jour)
	    {
	        $this->_jour = $_jour;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getHeureDebut()
	    {
	        return $this->_heureDebut;
	    }

	    /**
	     * @param mixed $_heureDebut
	     *
	     * @return self
	     */
	    public function setHeureDebut($_heureDebut)
	    {
	        $this->_heureDebut = $_heureDebut;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getHeureFin()
	    {
	        return $this->_heureFin;
	    }

	    /**
	     * @param mixed $_heureFin
	     *
	     * @return self
	     */
	    public function setHeureFin($_heureFin)
	    {
	        $this->_heureFin = $_heureFin;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getObservation()
	    {
	        return $this->_observation;
	    }

	    /**
	     * @param mixed $_observation
	     *
	     * @return self
	     */
	    public function setObservation($_observation)
	    {
	        $this->_observation = $_observation;

	        return $this;
	    }
	}
?>