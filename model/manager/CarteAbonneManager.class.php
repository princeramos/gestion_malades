<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */
	
	require 'autoload.php';
	
	class CarteAbonneManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(CarteAbonne $carteAbonne)
		{

		}

		public function update(CarteAbonne $carteAbonne)
		{
			
		}

		public function delete(CarteAbonne $carteAbonne)
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