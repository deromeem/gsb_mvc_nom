    <!-- Division pour le sommaire -->
    <div id="menuGauche">
		<div id="infosUtil">
    
        <h2>
    
		</h2>
    
		</div>  
        <ul id="menuList">
			<li >
				<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
			<li>
			
			    <?php
                 if ($_SESSION['estcomptable'] == 1) {
					 echo "COMPTABLE";
					 echo "<li class='smenu'>
				           <a href='index.php?uc=validerfrais&action=voirFichesFraisAV' title='valider fiches de frais ''>valider fiches frais</a>
			               </li>";
                     echo "<li class='smenu'>
				           <a href='index.php?uc=suivreFrais&action=saisirFrais' title='suivre fiche de frais ''>suivre paiement fiche de frais</a>
			               </li>";
			
					 
				}
				else{
					 echo "Visiteur";
					  echo "<li class='smenu'>
				           <a href='index.php?uc=gererFrais&action=saisirFrais' title='Renseigner fiche de frais ''>Renseigner Fiche de frais </a>
			               </li>";
                     echo "<li class='smenu'>
				           <a href='index.php?uc=etatFrais&action=selectionnerMois' title='Consulter fiche de frais ''>Consulter Fiche de frais</a>
			               </li>";

				} 
				?>
		    
			</li>
			
			<li class="smenu">
				<a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
			</li>
        </ul>
        
    </div>
    