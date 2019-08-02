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
			$q = $this->_bd->exec("SELECT * FROM tb_user WHERE id = ".$id);
			$resultSet = $q->fetch(PDO::FETCH_ASSOC);

			$user = new User();
			$user->setId($resultSet['id']);
			$user->setPseudo($resultSet['pseudo']);

			return $user;
		}

		public function getAll()
		{

		}

		public function connexion($email, $password)
		{
			$email = htmlspecialchars(stripslashes($email));
			$password = htmlspecialchars(stripslashes($password));

			$q = $this->_bd->query("SELECT * FROM tb_user WHERE pseudo = '$email' AND password = '$password' ") or die(print_r($this->_bd->errorInfo()));
			$donnees = $q->fetch(PDO::FETCH_ASSOC);

			if($donnees['pseudo'] == $email && $donnees['password'] == $password)
			{
				$user = new User();
				$user->setId($donnees['id']);
				$user->setPseudo($donnees['pseudo']);
				$user->setPassword($donnees['password']);

				return $user;
			}

			return null;
		}

		public function toTexte()
		{
			echo "e substr(string, start)";
		}

		public function deconnexion()
		{
			session_start();
			/*$_SESSION['heure_end'] = time();
			$duree_connection = $_SESSION['heure_end'] - $_SESSION['heure_start'];
			echo "Duree de connexion ".$duree_connection;*/
			$id = (int)$_SESSION['id'];
			$_SESSION = array();
			if(isset($_COOKIE[session_name()]))
			{
				setcookie(session_name(), '', time()-4200, '/');
			}
			session_destroy();
			header('Location: index.php');
		}
	}
?>