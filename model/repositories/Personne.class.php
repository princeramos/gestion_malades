<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	
	
	abstract class Personne
	{
		protected $_id;
		protected $_nom;
		protected $_postNom;
		protected $_prenom;
		protected $_sexe;
		protected $_dateNaissance;
		protected $_numTel;
		protected $_adresse;
		protected $_email;
		protected $_statutMatrimonial;
		protected $_profession;
		protected $_numAssurance;


		public function __construct(array $donnees)
		{
			$this->hydrate($donnees);
		}

		public function hydrate(array $donnees)
		{
			foreach ($donnees as $key => $value)
			{
				$method = 'set'.ucfirst($key);

				if(method_exists($this, $method))
				{
					$this->$method($value); 
				}
			}
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
	    public function getNom()
	    {
	        return $this->_nom;
	    }

	    /**
	     * @param mixed $_nom
	     *
	     * @return self
	     */
	    public function setNom($_nom)
	    {
	        $this->_nom = $_nom;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPostNom()
	    {
	        return $this->_postNom;
	    }

	    /**
	     * @param mixed $_postNom
	     *
	     * @return self
	     */
	    public function setPostNom($_postNom)
	    {
	        $this->_postNom = $_postNom;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPrenom()
	    {
	        return $this->_prenom;
	    }

	    /**
	     * @param mixed $_prenom
	     *
	     * @return self
	     */
	    public function setPrenom($_prenom)
	    {
	        $this->_prenom = $_prenom;

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
	    public function setSexe($_sexe)
	    {
	        $this->_sexe = $_sexe;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDateNaissance()
	    {
	        return $this->_dateNaissance;
	    }

	    /**
	     * @param mixed $_dateNaissance
	     *
	     * @return self
	     */
	    public function setDateNaissance($_dateNaissance)
	    {
	        $this->_dateNaissance = $_dateNaissance;

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
	    public function setNumTel($_numTel)
	    {
	        $this->_numTel = $_numTel;

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
	    public function setAdresse($_adresse)
	    {
	        $this->_adresse = $_adresse;

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
	    public function setEmail($_email)
	    {
	        $this->_email = $_email;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getStatutMatrimonial()
	    {
	        return $this->_statutMatrimonial;
	    }

	    /**
	     * @param mixed $_statutMatrimonial
	     *
	     * @return self
	     */
	    public function setStatutMatrimonial($_statutMatrimonial)
	    {
	        $this->_statutMatrimonial = $_statutMatrimonial;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getProfession()
	    {
	        return $this->_profession;
	    }

	    /**
	     * @param mixed $_profession
	     *
	     * @return self
	     */
	    public function setProfession($_profession)
	    {
	        $this->_profession = $_profession;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getNumAssurance()
	    {
	        return $this->_numAssurance;
	    }

	    /**
	     * @param mixed $_numAssurance
	     *
	     * @return self
	     */
	    public function setNumAssurance($_numAssurance)
	    {
	        $this->_numAssurance = $_numAssurance;

	        return $this;
	    }
	}

?>