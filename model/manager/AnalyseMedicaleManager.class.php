<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	
	require 'autoload.php';

	class AnalyseMedicaleManager
	{
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(AnalyseMedicale $analyse)
		{

		}

		public function update(AnalyseMedicale $analyse)
		{
			
		}

		public function delete(AnalyseMedicale $analyse)
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