<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	
	require_once 'Personne.class.php';
	
	class Medecin extends Personne
	{
		private $_matricule;
		private $_specialite;

		function __construct(array $donnees)
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
	    public function getMatricule()
	    {
	        return $this->_matricule;
	    }

	    /**
	     * @param mixed $_matricule
	     *
	     * @return self
	     */
	    public function setMatricule($matricule)
	    {
	        $this->_matricule = $matricule;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getSpecialite()
	    {
	        return $this->_specialite;
	    }

	    /**
	     * @param mixed $_specialite
	     *
	     * @return self
	     */
	    public function setSpecialite($specialite)
	    {
	        $this->_specialite = $specialite;

	        return $this;
	    }
	}
?>