<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class ParametresPatientManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(ParametresPatient $parametresPatient)
		{

		}

		public function update(ParametresPatient $parametresPatient)
		{
			
		}

		public function delete(ParametresPatient $parametresPatient)
		{
			
		}

		public function find($id)
		{
			
		}

		public function getAll()
		{
			
		}
	    /**
	     * @return mixed
	     */
	    public function getBd()
	    {
	        return $this->_bd;
	    }

	    /**
	     * @param mixed $_bd
	     *
	     * @return self
	     */
	    public function setBd($bd)
	    {
	        $this->_bd = $bd;

	        return $this;
	    }
	}
?>