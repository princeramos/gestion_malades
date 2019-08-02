<?php
	
	/**
	 *
	 * @author Prince Ramos
	 */

	class MedecinManager
	{
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Medecin $medecin)
		{
			$q = $this->_bd->prepare("INSERT INTO tb_medecin SET matricule = :matricule, nom = :nom, post_nom = :post_nom, prenom = :prenom, email = :email, sexe = :sexe, date_naissance = :date_naissance, specialite = :specialite, adresse = :adresse, num_tel = :num_tel, statut_matrimonial = :statut");

			$q->bindValue(':matricule', $patient->getMatricule());
			$q->bindValue(':nom', $patient->getNom());
			$q->bindValue(':post_nom', $patient->getPostNom());
			$q->bindValue(':prenom', $patient->getPrenom());
			$q->bindValue(':email', $patient->getEmail());
			$q->bindValue(':sexe', $patient->getSexe());
			$q->bindValue(':date_naissance', $patient->getDateNaissance());
			$q->bindValue(':specialite', $patient->getSpecialite());
			$q->bindValue(':adresse', $patient->getAdresse());
			$q->bindValue(':num_tel', $patient->getNumTel(), PDO::PARAM_INT);
			$q->bindValue(':statut', $patient->getStatutMatrimonial());

			$q->execute();
		}

		public function update(Medecin $medecin)
		{
			$q = $this->_bd->prepare("UPDATE tb_medecin SET matricule = :matricule, nom = :nom, post_nom = :post_nom, prenom = :prenom, email = :email, sexe = :sexe, date_naissance = :date_naissance, specialite = :specialite, adresse = :adresse, num_tel = :num_tel, statut_matrimonial = :statut WHERE id = ".$medecin->getId());

			$q->bindValue(':matricule', $patient->getMatricule());
			$q->bindValue(':nom', $patient->getNom());
			$q->bindValue(':post_nom', $patient->getPostNom());
			$q->bindValue(':prenom', $patient->getPrenom());
			$q->bindValue(':email', $patient->getEmail());
			$q->bindValue(':sexe', $patient->getSexe());
			$q->bindValue(':date_naissance', $patient->getDateNaissance());
			$q->bindValue(':specialite', $patient->getSpecialite());
			$q->bindValue(':adresse', $patient->getAdresse());
			$q->bindValue(':num_tel', $patient->getNumTel(), PDO::PARAM_INT);
			$q->bindValue(':statut', $patient->getStatutMatrimonial());

			$q->execute();
		}

		public function delete(Medecin $medecin)
		{
			$this->_bd->exec('DELETE FROM tb_medecin WHERE id = '. $medecin->getId());
		}

		public function find($id)
		{
			$id = (int) $id;

			$q = $this->_bd->query('SELECT * FROM tb_medecin WHERE id = '. $id);

			$donnees = $q->fetch(PDO::FETCH_ASSOC);

			return new Medecin($donnees);
		}

		public function getFirst()
		{
			$medecin;

			$q = $this->_bd->query(' SELECT * FROM tb_medecin ORDER BY id ASC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$medecin = new Medecin($donnees);
			}

			return $medecin;
		}

		public function getLast()
		{
			$medecin;

			$q = $this->_bd->query(' SELECT * FROM tb_medecin ORDER BY id DESC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$medecin = new Medecin($donnees);
			}

			return $medecin;
		}
		
		public function getAll()
		{
			$medecins = array();

			$q = $this->_bd->query('SELECT * FROM tb_medecin ORDER BY id DESC');

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$medecins = new Medecin($donnees);
			}

			return $medecins;
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