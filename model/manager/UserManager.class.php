<?php

	/**
	 *
	 * @author Prince Ramos
	 */
	class UserManager
	{
		private $_bd;

		public function __construct($bd)
		{
			$this->_bd = $bd;
		}

		public function create(User $user)
		{

		}

		public function update(User $user)
		{

		}

		public function delete(User $user)
		{

		}

		public function find($id)
		{

		}

		public function getAll()
		{

		}

		public function getConnexion($email, $password)
		{
			$email = htmlspecialchars(stripslashes($email));
			$password = htmlspecialchars(stripslashes($password));

			$q = $this->_bd->query("SELECT * FROM tb_user WHERE pseudo = '.$email.' AND password = '.$password.' ") or die(print_r($this->_bd->errorInfo()));
			$donnees = $q->fetch(PDO::FETCH_ASSOC);

			if($donnees['email'] == $email AND $donnees['password'] == $password)
			{
				return true;
			}

			return false;
		}

		public function getDeconnexion()
		{
			session_destroy();
		}
	}
?>