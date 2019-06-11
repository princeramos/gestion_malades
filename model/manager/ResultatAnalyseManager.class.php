<?php 

	/**
	 *
	 * @author Prince Ramos
	 */
	class ResultatAnalyseManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(ResultatAnalyse $resultatAnalyse)
		{

		}

		public function update(ResultatAnalyse $resultatAnalyse)
		{
			
		}

		public function delete(ResultatAnalyse $resultatAnalyse)
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