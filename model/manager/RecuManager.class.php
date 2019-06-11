<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class RecuManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Recu $recu)
		{

		}

		public function update(Recu $recu)
		{
			
		}

		public function delete(Recu $recu)
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