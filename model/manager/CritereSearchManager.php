<?php

	/**
	 * 
	 */
	class CritereSearchManager
	{
		private $_bd;

		function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(CritereSearch $critere)
		{

		}

		public function update(CritereSearch $critere)
		{
			
		}

		public function delete(CritereSearch $critere)
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