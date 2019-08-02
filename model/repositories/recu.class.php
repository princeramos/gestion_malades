<?php

	/**
	 *
	 * @author Prince Ramos
	 */

	class recu
	{
		private $_id;
		private $_idPatient;
		private $_nom;
		private $_prenom;
		private $_designation;
		private $_type;
		private $_datePayement;
		private $_montant;

		public function __construct(array $donnees)
		{
			$this->hydrate($donnees);
		}

		private function hydrate(array $donnees)
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
	    public function getNom()
	    {
	        return $this->_nom;
	    }

	    /**
	     * @param mixed $_nom
	     *
	     * @return self
	     */
	    public function setNom($_nom)
	    {
	        $this->_nom = $_nom;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPrenom()
	    {
	        return $this->_prenom;
	    }

	    /**
	     * @param mixed $_prenom
	     *
	     * @return self
	     */
	    public function setPrenom($_prenom)
	    {
	        $this->_prenom = $_prenom;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDesignation()
	    {
	        return $this->_designation;
	    }

	    /**
	     * @param mixed $_designation
	     *
	     * @return self
	     */
	    public function setDesignation($_designation)
	    {
	        $this->_designation = $_designation;

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
	    public function getDatePayement()
	    {
	        return $this->_datePayement;
	    }

	    /**
	     * @param mixed $_datePayement
	     *
	     * @return self
	     */
	    public function setDatePayement($_datePayement)
	    {
	        $this->_datePayement = $_datePayement;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getMontant()
	    {
	        return $this->_montant;
	    }

	    /**
	     * @param mixed $_montant
	     *
	     * @return self
	     */
	    public function setMontant($_montant)
	    {
	        $this->_montant = $_montant;

	        return $this;
	    }
	}
?>