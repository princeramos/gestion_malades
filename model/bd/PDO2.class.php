<?php

	/**
	* Classe implémentant le singleton pour PDO
	* @author Prince Ramos
	*/

	class PDO2 extends PDO
	{
		
		private static $_instance;

		public function __construct()
		{
			
		}

		/* Singleton */
		public static function getInstance()
		{
			if(!isset(self::$_instance))
			{
				try{

					self::$_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD);
					self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				}catch(Exception $e){
					die("Erreur : " .$e->getMessage());
				}
			}

			return self::$_instance;
		}
	}

?>