<?php

$subject = "Votre commande à bien été enregistrée";
$message = "Chère cliente, cher client,\r\n\r\nVotre commande, référencée " . $_GET["reference"] . ", a bien été ".
           "prise en compte sur le site Dicoland.com le" . date("d/m/Y") . " à "
           . date("H:m") . "\r\n\r\n" .
           "Récapitulatif de votre commande\r\n-------------------------\r\n" .
           $contenu_cmd . "\r\n" .
					 "Cette commande est cours de préparation. En cas d'indisponibilité, " .
					 " un message vous indiquera les délais de fourniture. " .
           "Souvenez-vous, vous pouvez à tout moment suivre l'état d'avancement" .
					 " de votre commande sur " .
					 "http://www.dicoland.com/index.php?page=oldcommande\n\n" .
					 "N'hésitez pas à nous contacter si vous désirez de plus amples " .
					 "informations.\n\nVous recevrez " .
           "un email à chaque étape du traitement de votre commande" .
					 "Toute l'équipe vous remercie pour la confiance " .
					 "que vous accordez à Dicoland et vous souhaite une " .
					 "agréable journée\n\n" .
					 "A bientôt !";

?>