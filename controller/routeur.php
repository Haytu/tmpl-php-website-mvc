<?php
require_once(File::build_path(array("controller", "controllerErreur.php")));

/* Contrôleur par défaut */
$controller = 'controllerAccueil';
$action = 'readAll';

/* Chargement du contrôleur */
if(!isset($_GET['controller']) && !isset($_GET['action'])){
	require(File::build_path(array("controller", "controllerAccueil.php")));
	$controller::$action();
}
else{
	if(isset($_GET['controller']) && !empty($_GET['controller'])){
		$controller = 'controller'. ucfirst($_GET['controller']);

		if(file_exists(File::build_path(array('controller', $controller . '.php')))){

			if($controller!="controllerErreur"){
				require(File::build_path(array('controller', $controller .  '.php')));
			}

			if(class_exists($controller)){
				if(isset($_GET['action'])){
					$action = $_GET['action'];
				}
				else if(isset($_POST['action'])){
					$action = $_POST['action'];
				}
				$cl = get_class_methods($controller);

				if(in_array($action, $cl)){
					$controller::$action();
				}
				else{
					controllerErreur::erreur("Action non existante");
				}
			}
		}else{
			controllerErreur::erreur("Le contrôleur n'existe pas");
		}
	}else{
		controllerErreur::erreur("Le contrôleur n'a pas été défini ou champs vides");
	}
}
