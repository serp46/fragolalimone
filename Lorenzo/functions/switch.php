<?php
if(isset($_GET['page'])){ //è settata get(page)?

	switch ($_GET['page']) {
		case "contatti":
		include 'layouts/contatti.php';
		break;

		case 'registrazione':
		include 'layouts/registrazione.php';
		break;

	    case 'root_personale':
		include 'layouts/root_personale.php';
		break;

		case 'errore':
		include 'layouts/errore.php';
		break;

		case 'risultati':
		include 'layouts/risultati.php';
		break;

		case 'risultatiroot':
		include 'layouts/risultatiroot.php';
		break;

		case 'utente':
		include 'layouts/utente.php';
		break;

		default:
		include 'layouts/home.php';
	}
} else include 'layouts/home.php';
?>
