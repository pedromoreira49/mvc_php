<?php

	$autoload = function($class){
		if(file_exists($class.'.php')){
			include($class.'.php');
		}else{
			die('Não foi possivel encontrar a class: '.$class);
		}
	};

	spl_autoload_register($autoload);

	$application = new Application();
	$application->run();

?>