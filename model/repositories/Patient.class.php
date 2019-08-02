<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */

	require_once 'Personne.class.php';

	class Patient extends Personne
	{
		protected $_numCarteAbonnement;
		protected $_antecedent;
		protected $_numChambre;
		protected $_groupeSanguin;
		protected $_traitement;
		protected $_allergies;
		protected $_tension;
		protected $_temperature;
		protected $_poids;
		protected $_nbreEnfants;
		
		function __construct(array $donnees)
		{
			$this->hydrate($donnees);
		}

		public function hydratre(array $donnees)
		{
			foreach ($variable as $key => $value)
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
	    public function getNumCarteAbonnement()
	    {
	        return $this->_numCarteAbonnement;
	    }

	    /**
	     * @param mixed $_numCarteAbonnement
	     *
	     * @return self
	     */
	    public function setNumCarteAbonnement($_numCarteAbonnement)
	    {
	        $this->_numCarteAbonnement = $_numCarteAbonnement;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAntecedent()
	    {
	        return $this->_antecedent;
	    }

	    /**
	     * @param mixed $_antecedent
	     *
	     * @return self
	     */
	    public function setAntecedent($_antecedent)
	    {
	        $this->_antecedent = $_antecedent;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getNumChambre()
	    {
	        return $this->_numChambre;
	    }

	    /**
	     * @param mixed $_numChambre
	     *
	     * @return self
	     */
	    public function setNumChambre($_numChambre)
	    {
	        $this->_numChambre = $_numChambre;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getGroupeSanguin()
	    {
	        return $this->_groupeSanguin;
	    }

	    /**
	     * @param mixed $_groupeSanguin
	     *
	     * @return self
	     */
	    public function setGroupeSanguin($_groupeSanguin)
	    {
	        $this->_groupeSanguin = $_groupeSanguin;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getTraitement()
	    {
	        return $this->_traitement;
	    }

	    /**
	     * @param mixed $_traitement
	     *
	     * @return self
	     */
	    public function setTraitement($_traitement)
	    {
	        $this->_traitement = $_traitement;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAllergies()
	    {
	        return $this->_allergies;
	    }

	    /**
	     * @param mixed $_allergies
	     *
	     * @return self
	     */
	    public function setAllergies($_allergies)
	    {
	        $this->_allergies = $_allergies;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getTension()
	    {
	        return $this->_tension;
	    }

	    /**
	     * @param mixed $_tension
	     *
	     * @return self
	     */
	    public function setTension($_tension)
	    {
	        $this->_tension = $_tension;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getTemperature()
	    {
	        return $this->_temperature;
	    }

	    /**
	     * @param mixed $_temperature
	     *
	     * @return self
	     */
	    public function setTemperature($_temperature)
	    {
	        $this->_temperature = $_temperature;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPoids()
	    {
	        return $this->_poids;
	    }

	    /**
	     * @param mixed $_poids
	     *
	     * @return self
	     */
	    public function setPoids($_poids)
	    {
	        $this->_poids = $_poids;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getNbreEnfants()
	    {
	        return $this->_nbreEnfants;
	    }

	    /**
	     * @param mixed $_nbreEnfants
	     *
	     * @return self
	     */
	    public function setNbreEnfants($_nbreEnfants)
	    {
	        $this->_nbreEnfants = $_nbreEnfants;

	        return $this;
	    }
	}
?>