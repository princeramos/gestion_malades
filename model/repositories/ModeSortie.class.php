<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */
	
	class ModeSortie
	{
		
		private $_id;
		private $_date;
		private $_type;
		private $_libelle;

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
	    public function getLibelle()
	    {
	        return $this->_libelle;
	    }

	    /**
	     * @param mixed $_libelle
	     *
	     * @return self
	     */
	    public function setLibelle($libelle)
	    {
	        $this->_libelle = $libelle;

	        return $this;
	    }
	}
?>