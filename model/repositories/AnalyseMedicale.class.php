<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */

	
	class AnalyseMedicale
	{
		private $_id;
		private $_idPatient;
		private $_idMedecin;
		private $_numAnalyse;
		private $_dateAnalyse;
		private $_designation;
		
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
	    public function getNumAnalyse()
	    {
	        return $this->_numAnalyse;
	    }

	    /**
	     * @param mixed $_numAnalyse
	     *
	     * @return self
	     */
	    public function setNumAnalyse($numAnalyse)
	    {
	        $this->_numAnalyse = $numAnalyse;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDateAnalyse()
	    {
	        return $this->_dateAnalyse;
	    }

	    /**
	     * @param mixed $_dateAnalyse
	     *
	     * @return self
	     */
	    public function setDateAnalyse($dateAnalyse)
	    {
	        $this->_dateAnalyse = $dateAnalyse;

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
	    public function setDesignation($designation)
	    {
	        $this->_designation = $designation;

	        return $this;
	    }
}

?>