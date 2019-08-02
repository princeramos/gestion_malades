<?php

	/**
	 *
	 * @author Prince Ramos
	 */

	
	class ScheduleManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Schedule $schedule)
		{

		}

		public function update(Schedule $schedule)
		{
			
		}

		public function delete(Schedule $schedule)
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