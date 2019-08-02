<?php

	
	function chargeClass($classe)
	{
		require $classe.'class.php';
	}

	spl_autoload_register('chargeClass');

?>