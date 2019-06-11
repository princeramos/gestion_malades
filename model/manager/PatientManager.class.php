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
			$q = $this->_bd->prepare("INSERT INTO tb_patient SET nom = :nom, post_nom = :post_nom, prenom = :prenom, email = :email, sexe = :sexe, date_naissance = :date_naissance, num_tel = :num_tel, adresse = :adresse, profession = :profession, statut_matrimonial = :statut");

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

			$q->execute();
		}

		public function update(Patient $patient)
		{
			$q = $this->_bd->prepare("UPDATE tb_patient SET nom = :nom, post_nom = :post_nom, prenom = :prenom, email = :email, sexe = :sexe, date_naissance = :date_naissance, num_tel = :num_tel, profession = :profession, statut_matrimonial = :statut");

			$q->bindValue(':nom', $patient->getNom());
			$q->bindValue(':post_nom', $patient->getPostNom());
			$q->bindValue(':prenom', $patient->getPrenom());
			$q->bindValue(':email', $patient->getEmail());
			$q->bindValue(':sexe', $patient->getSexe());
			$q->bindValue(':date_naissance', $patient->getDateNaissance());
			$q->bindValue(':num_tel', $patient->getNumTel(), PDO::PARAM_INT);
			$q->bindValue(':profession', $patient->getProfession());
			$q->bindValue(':statut', $patient->getStatutMatrimonial());

			$q->execute();
		}

		public function delete(Patient $patient)
		{
			$this->_bd->exec('DELETE FROM tb_patient WHERE id = '. $patient->getId());
		}

		public function find($id)
		{
			$id = (int) $id;

			$q = $this->_bd->query('SELECT * FROM tb_patient WHERE id = '. $id);

			$donnees = $q->fetch(PDO::FETCH_ASSOC);

			return new Patient($donnees);
		}
		
		public function getAll()
		{
			$patients = array();

			$q = $this->_bd->query(' SELECT * FROM tb_patient ORDER BY id DESC');

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$patients = new Patient($donnees);
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