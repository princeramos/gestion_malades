<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class ConsultationManager
	{
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Consultation $consultation)
		{

		}

		public function update(Consultation $consultation)
		{
			
		}

		public function delete(Consultation $consultation)
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