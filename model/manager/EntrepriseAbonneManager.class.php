<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */
	class EntrepriseAbonneManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(EntrepriseAbonne $entreprise)
		{

		}

		public function update(EntrepriseAbonne $entreprise)
		{
			
		}

		public function delete(EntrepriseAbonne $entreprise)
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