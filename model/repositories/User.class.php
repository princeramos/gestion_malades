<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class User extends Personne
	{
		private $_id;
		private $_idMedecin;
		private $_pseudo;
		private $_password;
		private $_photoProfil;
		
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
	    public function getIdMedecin()
	    {
	        return $this->_idMedecin;
	    }

	    /**
	     * @param mixed $_idMedecin
	     *
	     * @return self
	     */
	    public function setIdMedecin($idMedecin)
	    {
	        $this->_idMedecin = $idMedecin;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPseudo()
	    {
	        return $this->_pseudo;
	    }

	    /**
	     * @param mixed $_pseudo
	     *
	     * @return self
	     */
	    public function setPseudo($pseudo)
	    {
	        $this->_pseudo = $pseudo;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPassword()
	    {
	        return $this->_password;
	    }

	    /**
	     * @param mixed $_password
	     *
	     * @return self
	     */
	    public function setPassword($password)
	    {
	        $this->_password = $password;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPhotoProfil()
	    {
	        return $this->_photoProfil;
	    }

	    /**
	     * @param mixed $_photoProfil
	     *
	     * @return self
	     */
	    public function setPhotoProfil($photoProfil)
	    {
	        $this->_photoProfil = $photoProfil;

	        return $this;
	    }
	}
?>