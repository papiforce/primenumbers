<?php
function prime_numbers($argv){
	if (count($argv) == 2){
		if (is_numeric($argv[1])){
			intval($argv[1]);
			gettype($argv[1]);
			if ($argv[1] <= 1){
				echo $argv[1] . " n'est pas un nombre premier.\n";
				return FALSE;
			}
			elseif ($argv[1] == 2){
				echo $argv[1] . " est un nombre premier.";
				return TRUE;
			}
			elseif ($argv[1] % 2 == 0){
				echo $argv[1] . " n'est pas un nombre premier.\n";
				return FALSE;
			}
			for ($cpt = 3; $cpt < $argv[1]; $cpt = $cpt + 2){
				if ($argv[1] % $cpt == 0){
					echo $argv[1] . " n'est un nombre pas premier.\n";
					return FALSE;
				}
			}
			echo $argv[1] . " est un nombre premier.\n";
			return TRUE;
		}
		die("La valeur saisie n'est pas une valeur numérique. Veuillez saisir un nombre.\n");
	}elseif (count($argv) > 2){
		die("Il y a trop de paramètres, veuillez saisir qu'un seul nombre.\n");
	}else{
		die("Aucun nombre n'a été saisi.\n");
	}
}

prime_numbers($argv);