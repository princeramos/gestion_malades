<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	
	require 'autoload.php';

	class AntecedentManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Antecedent $antecedent)
		{

		}

		public function update(Antecedent $antecedent)
		{
			
		}

		public function delete(Antecedent $antecedent)
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