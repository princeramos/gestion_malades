<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class ModeSortieManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(ModeSortie $modeSortie)
		{

		}

		public function update(ModeSortie $modeSortie)
		{
			
		}

		public function delete(ModeSortie $modeSortie)
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