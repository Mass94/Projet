<?php 
	$title = "Inscription";
	include('functions/fonctions.php'); 
	include('functions/constantes.php'); 
	chargerMesClasses();

	$db = new Database();

	if (isset($_POST['ajouter'])) {
		extract($_POST);
		if (notEmpty([$nom, $prenom, $email, $tel, $login, $mdp])) {

			$user = new Users($nom, $prenom, $email, $tel, $login, $mdp);

			if($db->addUser($user)){
				message("Compte active avec succes", "success");
				header('Location: index.php');
				exit();
			}else{
				message("Erreur d'ajout");
			}
			
		}
		else{
			message("Veuillez remplir tous les champs");
		}
	}


	require('view/inscription.view.php');
?>