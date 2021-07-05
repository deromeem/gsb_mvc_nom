<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];

switch ($action) {
	case 'voirFichesFraisAV':
		$lesFraisForfait= $pdo->getLesFraisAV();
		include("vues/v_listefraisforfaitav.php");
		break;
    case 'voirFraisAV':
    	include("vues/v_listefraisforfaitav.php");
    	break;	
}