<?php

	/**
	 *
	 * @author Prince Ramos
	 */

	class ParametresPatientManager
	{
		
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(ParametresPatient $parametresPatient)
		{
			$q = $this->_bd->prepare("INSERT INTO tb_parametres_patient SET idPatient = :idPatient, tension = :tension, temperature = :temperature, poids = :poids, nbrEnfants = :nbrEnfants, numCarteAbonnement = :numCarteAbonnement,  	antecedent = :antecedent, allergies = :allergies, numChambre = :numChambre, groupeSanguin = :groupeSanguin, traitement = :traitement");

			$q->bindValue(':idPatient', $parametresPatient->getIdPatient(), PDO::PARAM_INT);
			$q->bindValue(':tension', $parametresPatient->getTension(), PDO::PARAM_STR);
			$q->bindValue(':temperature', $parametresPatient->getTemperature(), PDO::PARAM_STR);
			$q->bindValue(':poids', $parametresPatient->getPoids(), PDO::PARAM_STR);
			$q->bindValue(':nbrEnfants', $parametresPatient->getNbreEnfants(), PDO::PARAM_INT);
			$q->bindValue(':numCarteAbonnement', $parametresPatient->getNumCarteAbonnement(), PDO::PARAM_INT);
			$q->bindValue(':antecedent', $parametresPatient->getAntecedent(), PDO::PARAM_STR);
			$q->bindValue(':allergies', $parametresPatient->getAllergies(), PDO::PARAM_STR);
			$q->bindValue(':numChambre', $parametresPatient->getNumChambre(), PDO::PARAM_INT);
			$q->bindValue(':groupeSanguin', $parametresPatient->getGroupeSanguin(), PDO::PARAM_STR);
			$q->bindValue(':traitement', $parametresPatient->getTraitement(), PDO::PARAM_STR);


			$q->execute();
		}

		public function update(ParametresPatient $parametresPatient)
		{
			$q = $this->_bd->prepare("UPDATE tb_parametres_patient SET idPatient = :idPatient, tension = :tension, temperature = :temperature, poids = :poids, nbrEnfants = :nbrEnfants, numCarteAbonnement = :numCarteAbonnement,  	antecedent = :antecedent, allergies = :allergies, numChambre = :numChambre, groupeSanguin = :groupeSanguin, traitement = :traitement WHERE id = ".$parametresPatient->getId());

			$q->bindValue(':idPatient', $parametresPatient->getIdPatient(), PDO::PARAM_INT);
			$q->bindValue(':tension', $parametresPatient->getTension(), PDO::PARAM_STR);
			$q->bindValue(':temperature', $parametresPatient->getTemperature(), PDO::PARAM_STR);
			$q->bindValue(':poids', $parametresPatient->getPoids(), PDO::PARAM_STR);
			$q->bindValue(':nbrEnfants', $parametresPatient->getNbreEnfants(), PDO::PARAM_INT);
			$q->bindValue(':numCarteAbonnement', $parametresPatient->getNumCarteAbonnement(), PDO::PARAM_INT);
			$q->bindValue(':antecedent', $parametresPatient->getAntecedent(), PDO::PARAM_STR);
			$q->bindValue(':allergies', $parametresPatient->getAllergies(), PDO::PARAM_STR);
			$q->bindValue(':numChambre', $parametresPatient->getNumChambre(), PDO::PARAM_INT);
			$q->bindValue(':groupeSanguin', $parametresPatient->getGroupeSanguin(), PDO::PARAM_STR);
			$q->bindValue(':traitement', $parametresPatient->getTraitement(), PDO::PARAM_STR);


			$q->execute();
		}

		public function delete(ParametresPatient $parametresPatient)
		{
			$this->_bd->exec('DELETE FROM tb_parametres_patient WHERE id = '. $parametresPatient->getId()) or die(print_r($this->$_bd->errorInfo()));
		}

		public function find($id)
		{
			$id = (int) $id;

			$q = $this->_bd->query('SELECT * FROM tb_parametres_patient WHERE id = '. $id) or die(print_r($this->$_bd->errorInfo()));

			if (($q->rowCount()) > 0)
			{
				$donnees = $q->fetch(PDO::FETCH_ASSOC);

				return new ParametresPatient($donnees);
			}
		}

		public function getFirst()
		{
			$parametre;

			$q = $this->_bd->query(' SELECT * FROM tb_parametres_patient ORDER BY id ASC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$parametre = new PatientManager($donnees);
			}

			return $parametre;
		}

		public function getLast()
		{
			$parametre;

			$q = $this->_bd->query(' SELECT * FROM tb_parametres_patient ORDER BY id DESC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$parametre = new ParametresPatient($donnees);
			}

			return $parametre;
		}

		public function getAll()
		{
			$parametres = array();

			$q = $this->_bd->query(' SELECT * FROM tb_patient ORDER BY id DESC') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$parametres[] = new PatientManager($donnees);
			}

			return $parametres;
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