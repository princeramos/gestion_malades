<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class recu
	{
		private $_id;
		private $_idPatient;
		private $_type;
		private $_date;
		private $_montant;

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
	    public function getMontant()
	    {
	        return $this->_montant;
	    }

	    /**
	     * @param mixed $_montant
	     *
	     * @return self
	     */
	    public function setMontant($montant)
	    {
	        $this->_montant = $montant;

	        return $this;
	    }
	}
?>