<?php

	/**
	 * 
	 */
	class CritereSearch
	{
		private $_id;
		private $_age;
		private $_sexe;
		private $_abonnee;
		private $_etatCivil;
		private $_chambre;

		function __construct(argument)
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
	    public function setId($id)
	    {
	        $this->_id = $id;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAge()
	    {
	        return $this->_age;
	    }

	    /**
	     * @param mixed $_age
	     *
	     * @return self
	     */
	    public function setAge($age)
	    {
	        $this->_age = $age;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getSexe()
	    {
	        return $this->_sexe;
	    }

	    /**
	     * @param mixed $_sexe
	     *
	     * @return self
	     */
	    public function setSexe($sexe)
	    {
	        $this->_sexe = $sexe;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAbonnee()
	    {
	        return $this->_abonnee;
	    }

	    /**
	     * @param mixed $_abonnee
	     *
	     * @return self
	     */
	    public function setAbonnee($abonnee)
	    {
	        $this->_abonnee = $abonnee;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getEtatCivil()
	    {
	        return $this->_etatCivil;
	    }

	    /**
	     * @param mixed $_etatCivil
	     *
	     * @return self
	     */
	    public function setEtatCivil($etatCivil)
	    {
	        $this->_etatCivil = $etatCivil;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getChambre()
	    {
	        return $this->_chambre;
	    }

	    /**
	     * @param mixed $_chambre
	     *
	     * @return self
	     */
	    public function setChambre($chambre)
	    {
	        $this->_chambre = $chambre;

	        return $this;
	    }
}
?>