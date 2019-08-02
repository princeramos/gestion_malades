<?php

	/**
	 * 
	 */
	
	require_once 'Personne.class.php';

	class Visiteur extends Personne
	{
		
		private $_idPatient;
		private $_lienParente;

		public function __construct(array $donnees)
		{
			$this->hydrate($donnees);
		}

		public function hydrate(array $donnees)
		{
			foreach ($donnees as $key => $value)
			{
				$method = 'set'.ucfirst($key);

				if (method_exists($this, $method))
				{
					$this->$method($value);
				}
			}
		}
	    /**
	     * @return mixed
	     */
	    public function getIdPatient()
	    {
	        return $this->_idPatient;
	    }

	    /**
	     * @param mixed $_idPatient
	     *
	     * @return self
	     */
	    public function setIdPatient($_idPatient)
	    {
	        $this->_idPatient = $_idPatient;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getLienParente()
	    {
	        return $this->_lienParente;
	    }

	    /**
	     * @param mixed $_lienParente
	     *
	     * @return self
	     */
	    public function setLienParente($_lienParente)
	    {
	        $this->_lienParente = $_lienParente;

	        return $this;
	    }
	}
?>