<?php

$subject = "Votre commande � bien �t� enregistr�e";
$message = "Ch�re cliente, cher client,\r\n\r\nVotre commande, r�f�renc�e " . $_GET["reference"] . ", a bien �t� ".
           "prise en compte sur le site Dicoland.com le" . date("d/m/Y") . " � "
           . date("H:m") . "\r\n\r\n" .
           "R�capitulatif de votre commande\r\n-------------------------\r\n" .
           $contenu_cmd . "\r\n" .
					 "Cette commande est cours de pr�paration. En cas d'indisponibilit�, " .
					 " un message vous indiquera les d�lais de fourniture. " .
           "Souvenez-vous, vous pouvez � tout moment suivre l'�tat d'avancement" .
					 " de votre commande sur " .
					 "http://www.dicoland.com/index.php?page=oldcommande\n\n" .
					 "N'h�sitez pas � nous contacter si vous d�sirez de plus amples " .
					 "informations.\n\nVous recevrez " .
           "un email � chaque �tape du traitement de votre commande" .
					 "Toute l'�quipe vous remercie pour la confiance " .
					 "que vous accordez � Dicoland et vous souhaite une " .
					 "agr�able journ�e\n\n" .
					 "A bient�t !";

?>