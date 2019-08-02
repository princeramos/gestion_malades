<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */
	
	require 'autoload.php';
	
	class OrdonnanceManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Ordonnance $ordonnance)
		{

		}

		public function update(Ordonnance $ordonnance)
		{
			
		}

		public function delete(Ordonnance $ordonnance)
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