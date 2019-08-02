<?php

	/**
	 *
	 * @author Prince Ramos
	 */

	class ConsultationManager
	{
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(Consultation $consultation)
		{
			$q = $this->_bd->prepare("INSERT INTO tb_consultation SET idPatient = :idPatient, idMedecin = :idMedecin, type = :type, dateConsultation = :dateConsultation, dateRendezVous = :dateRendezVous, description = :description");

			$q->bindValue(':idPatient', $consultation->getIdPatient(), PDO::PARAM_INT);
			$q->bindValue(':idMedecin', $patient->getIdMedecin(), PDO::PARAM_INT);
			$q->bindValue(':type', $patient->getType(), PDO::PARAM_STR);
			$q->bindValue(':dateConsultation', $consultation->getDateConsultation(), PDO::PARAM_STR);
			$q->bindValue(':dateRendezVous', $consultation->getDateRendezVous(), PDO::PARAM_STR);
			$q->bindValue(':description', $consultation->getDescription(), PDO::PARAM_STR);

			$q->execute();
		}

		public function update(Consultation $consultation)
		{
			$q = $this->_bd->prepare("UPDATE tb_consultation SET idPatient = :idPatient, idMedecin = :idMedecin, type = :type, dateConsultation = :dateConsultation, dateRendezVous = :dateRendezVous, description = :description WHERE id = ".$consultation->getId());

			$q->bindValue(':idPatient', $consultation->getIdPatient(), PDO::PARAM_INT);
			$q->bindValue(':idMedecin', $patient->getIdMedecin(), PDO::PARAM_INT);
			$q->bindValue(':type', $patient->getType(), PDO::PARAM_STR);
			$q->bindValue(':dateConsultation', $consultation->getDateConsultation(), PDO::PARAM_STR);
			$q->bindValue(':dateRendezVous', $consultation->getDateRendezVous(), PDO::PARAM_STR);
			$q->bindValue(':description', $consultation->getDescription(), PDO::PARAM_STR);

			$q->execute();
		}

		public function delete(Consultation $consultation)
		{
			$this->_bd->exec('DELETE FROM tb_consultation WHERE id = '. $consultation->getId()) or die(print_r($this->$_bd->errorInfo()));
		}

		public function find($id)
		{
			$id = (int) $id;

			$q = $this->_bd->query('SELECT * FROM tb_consultation WHERE id = '. $id) or die(print_r($this->$_bd->errorInfo()));

			if (($q->rowCount()) > 0)
			{
				$donnees = $q->fetch(PDO::FETCH_ASSOC);

				return new Consultation($donnees);
			}
		}

		public function getFirst()
		{
			$consultation;

			$q = $this->_bd->query(' SELECT * FROM tb_consultation ORDER BY id ASC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$consultation= new Consultation($donnees);
			}

			return $consultation;
		}

		public function getLast()
		{
			$consultation;

			$q = $this->_bd->query(' SELECT * FROM tb_consultation ORDER BY id DESC LIMIT  0,1') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$consultation = new Consultation($donnees);
			}

			return $consultation;
		}

		public function getMedecin($id)
		{
			$medecin;

			$q = $this->_bd->query('SELECT * FROM tb_medecin WHERE id = '.$id) or die(print_r($this->_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$medecin = new Medecin($donnees);
			}
			
			return $medecin;
		}


		public function getAll()
		{
			$consultations = array();

			$q = $this->_bd->query(' SELECT * FROM tb_patient ORDER BY id DESC') or die(print_r($this->$_bd->errorInfo()));

			while($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$consultations[] = new Consultation($donnees);
			}

			return $consultations;
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