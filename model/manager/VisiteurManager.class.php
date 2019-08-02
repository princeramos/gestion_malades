<?php 

	/**
	 * 
	 */
	
	// require_once 'repositories/Visiteur.class.php';

	class VisiteurManager
	{
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Visiteur $visiteur)
		{
			$q = $this->_bd->prepare("INSERT INTO tb_visiteur SET idPatient = :idPatient, nom = :nom, postNom = :post_nom, prenom = :prenom, sexe = :sexe, email = :email, numTel = :num_tel, adresse = :adresse, profession = :profession, lienParente = :lienParente, statutMatrimonial = :statut");

			$q->bindValue(':idPatient', $visiteur->getIdPatient(), PDO::PARAM_INT);
			$q->bindValue(':nom', $visiteur->getNom(), PDO::PARAM_STR);
			$q->bindValue(':post_nom', $visiteur->getPostNom(), PDO::PARAM_STR);
			$q->bindValue(':prenom', $visiteur->getPrenom(), PDO::PARAM_STR);
			$q->bindValue(':email', $visiteur->getEmail(), PDO::PARAM_STR);
			$q->bindValue(':sexe', $visiteur->getSexe(), PDO::PARAM_STR);
			$q->bindValue(':num_tel', $visiteur->getNumTel(), PDO::PARAM_INT);
			$q->bindValue(':adresse', $visiteur->getAdresse(), PDO::PARAM_STR);
			$q->bindValue(':profession', $visiteur->getProfession(), PDO::PARAM_STR);
			$q->bindValue(':lienParente', $visiteur->getLienParente(), PDO::PARAM_STR);
			$q->bindValue(':statut', $visiteur->getStatutMatrimonial(), PDO::PARAM_STR);

			$q->execute();
		}

		public function update(Visiteur $visiteur)
		{
			$q = $this->_bd->prepare("UPDATE tb_visiteur SET idPatient = :idPatient, nom = :nom, post_nom = :post_nom, prenom = :prenom, email = :email, sexe = :sexe, date_naissance = :date_naissance, num_tel = :num_tel, profession = :profession, statut_matrimonial = :statut WHERE id = ".$visiteur->getId());

			$q->bindValue(':idPatient', $visiteur->getIdPatient());
			$q->bindValue(':nom', $visiteur->getNom());
			$q->bindValue(':post_nom', $visiteur->getPostNom());
			$q->bindValue(':prenom', $visiteur->getPrenom());
			$q->bindValue(':email', $visiteur->getEmail());
			$q->bindValue(':sexe', $visiteur->getSexe());
			$q->bindValue(':date_naissance', $visiteur->getDateNaissance());
			$q->bindValue(':num_tel', $visiteur->getNumTel(), PDO::PARAM_INT);
			$q->bindValue(':profession', $visiteur->getProfession());
			$q->bindValue(':statut', $visiteur->getStatutMatrimonial());

			$q->execute();
		}

		public function delete(Visiteur $visiteur)
		{
			$this->_bd->exec('DELETE FROM tb_visiteur WHERE id = '. $visiteur->getId()) or die(print_r($this->$_bd->errorInfo()));
		}

		public function find($id)
		{
			$id = (int) $id;

			$q = $this->_bd->query('SELECT * FROM tb_visiteur WHERE id = '. $id) or die(print_r($this->$_bd->errorInfo()));

			if (($q->rowCount()) > 0)
			{
				$donnees = $q->fetch(PDO::FETCH_ASSOC);

				return new Visiteur($donnees);
			}

		}
		
		public function getFirst()
		{
			$visiteur;

			$q = $this->_bd->query(' SELECT * FROM tb_visiteur ORDER BY id ASC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$visiteur = new Visiteur($donnees);
			}

			return $visiteur;
		}

		public function getLast()
		{
			$visiteur;

			$q = $this->_bd->query(' SELECT * FROM tb_visiteur ORDER BY id DESC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$visiteur = new Visiteur($donnees);
			}

			return $visiteur;
		}

		public function getAll()
		{
			$visiteurs = array();

			$q = $this->_bd->query(' SELECT * FROM tb_visiteur ORDER BY id DESC') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$visiteurs[] = new Visiteur($donnees);
			}

			return $visiteurs;
		}
	}
?>