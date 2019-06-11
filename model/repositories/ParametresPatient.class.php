<?php
	
	/**
     *
     * @author Prince Ramos
	 */
	class ParametresPatient extends Patient
	{
		
		private $_id;
		private $_idPatient;
		private $_tension;
		private $_temperature;
		private $_poids;
		private $_nbreEnfant;
		
		function __construct()
		{
			# code...
		}


	
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $_id
     *
     * @return self
     */
    public function setId($_id)
    {
        $this->_id = $_id;

        return $this;
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
    public function setIdPatient($idPatient)
    {
        $this->_idPatient = $idPatient;

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
    public function setTension($tension)
    {
        $this->_tension = $tension;

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
    public function setTemperature($temperature)
    {
        $this->_temperature = $temperature;

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
    public function setPoids($poids)
    {
        $this->_poids = $poids;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbreEnfant()
    {
        return $this->nbreEnfant;
    }

    /**
     * @param mixed $nbreEnfant
     *
     * @return self
     */
    public function setNbreEnfant($nbreEnfant)
    {
        $this->nbreEnfant = $nbreEnfant;

        return $this;
    }
}
?>