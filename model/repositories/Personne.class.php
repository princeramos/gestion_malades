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


		public function __construct()
		{
			
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

		/* Les setters */

		public function setId($id)
		{
			if($id > 0)
			{
				$this->_id = $id;
			}
		}

		public function setNom($nom)
		{
			if(is_string($nom))
			{
				$this->_nom = $nom;
			}
		}

		public function setPostNom($postNom)
		{
			if(is_string($postNom))
			{
				$this->_postNom = $postNom;
			}
		}

		public function setPrenom($prenom)
		{
			if(is_string($prenom))
			{
				$this->_prenom = $prenom;
			}
		}

		public function setSexe($sexe)
		{
			if(is_string($sexe))
			{
				$this->_sexe = $sexe;
			}
		}

		public function setDateNaissance($dateNaissance)
		{
			if(is_string($dateNaissance))
			{
				$this->_dateNaissance = $dateNaissance;
			}
		}

		public function setNumTel($num)
		{
			if(is_long($num))
			{
				$this->_numTel = $num;
			}
		}

		public function setAdresse($adresse)
		{
			if(is_string($adresse))
			{
				$this->_adresse = $adresse;
			}
		}

		public function setEmail($email)
		{
			if(is_string($email))
			{
				$this->_email = $email;
			}
		}

		public function setStatutMatrimonial($statut)
		{
			if(is_string($statut))
			{
				$this->_statutMatrimonial = $statut;
			}
		}

		/* Les getters */

		public function getId()
		{
			return $this->_id;
		}

		public function getNom()
		{
			return $this->_nom;
		}

		public function getPostNom()
		{
			return $this->_postNom;
		}

		public function getPrenom()
		{
			return $this->_prenom;
		}

		public function getSexe()
		{
			return $this->_sexe;
		}

		public function getDateNaissance()
		{
			return $this->_dateNaissance;
		}

		public function getNumTel()
		{
			return $this->_numTel;
		}

		public function getAdresse()
		{
			return $this->_adresse;
		}

		public function getEmail()
		{
			return $this->_email;
		}

		public function getStatutMatrimonial()
		{
			return $this->_statutMatrimonial;
		}
	}

?>