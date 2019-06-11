<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */
	class ResultatAnalyse
	{
		
		private $_id;
		private $_idAnalyse;
		private $_numResultat;
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
	    public function getIdAnalyse()
	    {
	        return $this->_idAnalyse;
	    }

	    /**
	     * @param mixed $_idAnalyse
	     *
	     * @return self
	     */
	    public function setIdAnalyse($idAnalyse)
	    {
	        $this->_idAnalyse = $idAnalyse;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getNumResultat()
	    {
	        return $this->_numResultat;
	    }

	    /**
	     * @param mixed $_numResultat
	     *
	     * @return self
	     */
	    public function setNumResultat($numResultat)
	    {
	        $this->_numResultat = $numResultat;

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