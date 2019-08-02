<?php

	/**
	 *
	 * @author Prince Ramos
	 */


	class PatientManager
	{
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Patient $patient)
		{
			$q = $this->_bd->prepare("INSERT INTO tb_patient SET nom = :nom, postNom = :post_nom, prenom = :prenom, email = :email, sexe = :sexe, dateNaissance = :date_naissance, numTel = :num_tel, adresse = :adresse, profession = :profession, statutMatrimonial = :statut, numAssurance = :numAssurance");

			$q->bindValue(':nom', $patient->getNom(), PDO::PARAM_STR);
			$q->bindValue(':post_nom', $patient->getPostNom(), PDO::PARAM_STR);
			$q->bindValue(':prenom', $patient->getPrenom(), PDO::PARAM_STR);
			$q->bindValue(':email', $patient->getEmail(), PDO::PARAM_STR);
			$q->bindValue(':sexe', $patient->getSexe(), PDO::PARAM_STR);
			$q->bindValue(':date_naissance', $patient->getDateNaissance(), PDO::PARAM_STR);
			$q->bindValue(':num_tel', $patient->getNumTel(), PDO::PARAM_INT);
			$q->bindValue(':adresse', $patient->getAdresse(), PDO::PARAM_STR);
			$q->bindValue(':profession', $patient->getProfession(), PDO::PARAM_STR);
			$q->bindValue(':statut', $patient->getStatutMatrimonial(), PDO::PARAM_STR);
			$q->bindValue(':numAssurance', $patient->getNumAssurance(), PDO::PARAM_STR);

			$q->execute() or die(print_r($this->_bd->errorInfo()));
		}

		public function update(Patient $patient)
		{
			$q = $this->_bd->prepare("UPDATE tb_patient SET nom = :nom, postNom = :post_nom, prenom = :prenom, email = :email, sexe = :sexe, dateNaissance = :date_naissance, numTel = :num_tel, adresse = :adresse, profession = :profession, statutMatrimonial = :statut, numAssurance = :numAssurance WHERE id = ".$patient->getId());

			$q->bindValue(':nom', $patient->getNom(), PDO::PARAM_STR);
			$q->bindValue(':post_nom', $patient->getPostNom(), PDO::PARAM_STR);
			$q->bindValue(':prenom', $patient->getPrenom(), PDO::PARAM_STR);
			$q->bindValue(':email', $patient->getEmail(), PDO::PARAM_STR);
			$q->bindValue(':sexe', $patient->getSexe(), PDO::PARAM_STR);
			$q->bindValue(':date_naissance', $patient->getDateNaissance(), PDO::PARAM_STR);
			$q->bindValue(':num_tel', $patient->getNumTel(), PDO::PARAM_INT);
			$q->bindValue(':adresse', $patient->getAdresse(), PDO::PARAM_STR);
			$q->bindValue(':profession', $patient->getProfession(), PDO::PARAM_STR);
			$q->bindValue(':statut', $patient->getStatutMatrimonial(), PDO::PARAM_STR);
			$q->bindValue(':numAssurance', $patient->getNumAssurance(), PDO::PARAM_STR);

			$q->execute() or die(print_r($this->_bd->errorInfo()));
		}

		public function delete(Patient $patient)
		{
			$this->_bd->exec('DELETE FROM tb_patient WHERE id = '. $patient->getId()) or die(print_r($this->$_bd->errorInfo()));
		}

		public function find($id)
		{
			$id = (int) $id;

			$q = $this->_bd->query('SELECT * FROM tb_patient WHERE id = '. $id) or die(print_r($this->$_bd->errorInfo()));

			if (($q->rowCount()) > 0)
			{
				$donnees = $q->fetch(PDO::FETCH_ASSOC);

				return new Patient($donnees);
			}
		}
		
		public function getFirst()
		{
			$patient;

			$q = $this->_bd->query(' SELECT * FROM tb_patient ORDER BY id ASC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$patient = new Patient($donnees);
			}

			return $patient;
		}

		public function getLast()
		{
			$patient;

			$q = $this->_bd->query(' SELECT * FROM tb_patient ORDER BY id DESC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$patient = new Patient($donnees);
			}

			return $patient;
		}

		public function getAll()
		{
			$patients = array();

			$q = $this->_bd->query(' SELECT * FROM tb_patient ORDER BY id DESC') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$patients[] = new Patient($donnees);
			}

			return $patients;
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