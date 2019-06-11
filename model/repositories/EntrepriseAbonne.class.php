<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class EntrepriseAbonne
	{
		private $_id;
		private $_nom;
		private $_numTel;
		private $_email;
		private $_adresse;

		function __construct()
		{
			
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
	    public function getNom()
	    {
	        return $this->_nom;
	    }

	    /**
	     * @param mixed $_nom
	     *
	     * @return self
	     */
	    public function setNom($nom)
	    {
	        $this->_nom = $nom;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getNumTel()
	    {
	        return $this->_numTel;
	    }

	    /**
	     * @param mixed $_numTel
	     *
	     * @return self
	     */
	    public function setNumTel($numTel)
	    {
	        $this->_numTel = $numTel;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getEmail()
	    {
	        return $this->_email;
	    }

	    /**
	     * @param mixed $_email
	     *
	     * @return self
	     */
	    public function setEmail($email)
	    {
	        $this->_email = $email;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAdresse()
	    {
	        return $this->_adresse;
	    }

	    /**
	     * @param mixed $_adresse
	     *
	     * @return self
	     */
	    public function setAdresse($adresse)
	    {
	        $this->_adresse = $adresse;

	        return $this;
	    }
	}
?>