 <div id="contenu">
      <h2>Mes fiches de frais sans valider</h2>
     
      <div class="corpsForm">
         
      <p>
	     
	     <table class="listeLegere">
     
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Id Visiteur </th>
                <th class='montant'>Montant</th>                
             </tr>
        <?php      
          foreach ( $lesFraisForfait as $unFraisHorsForfait ) 
      {
      $date = $unFraisHorsForfait['mois'];
      $libelle = $unFraisHorsForfait['idVisiteur'];
      $montant = $unFraisHorsForfait['montantValide'];
    ?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
	     
       
       <?php
        }
      ?>
     </table>
       
            
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>