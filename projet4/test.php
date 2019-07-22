<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<?php $texte = "JE suis de la classe		
			Maimouna est fache par ce que je l'ai traite de Kania<br>
			Moi mamoune demande pardon.<br>
			";  ?>
	<p> 
		<?php 
			if (strlen($texte) < 50) {
				echo $texte;
			}else{
				$first_chaine = substr($texte,0, 50); 
				echo $first_chaine;

				$second_chaine = substr($texte,50);

				echo "<details>
					<summary>voir plus...</summary>
					".$second_chaine."
					</details>";
			}

		?>
		
	</p>

</body>
</html>