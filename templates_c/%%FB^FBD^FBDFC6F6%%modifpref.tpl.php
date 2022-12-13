<?php /* Smarty version 2.6.31, created on 2020-09-09 08:52:35
         compiled from de/modifpref.tpl */ ?>
<div id="modifpref">
  <?php if (( $this->_tpl_vars['error_modif'] && $_POST['modifpref'] ) || ! $_POST['modifpref']): ?>
    <h2><span class="deco">></span>Persönliche Angaben</h2>
  
    <p>
      Sie können die Ihre Person betreffenden Angaben ebenso wie Ihr Passwort ändern.
      
    </p>
    
    <?php if ($this->_tpl_vars['error_modif']): ?>
    <div id="erreur">
    <h3>Fehlende Angaben! Einige Felder sind unvollständig ausgefüllt:</h3>
    <p>

			<?php if ($this->_tpl_vars['error_modif']['noname'] == 1): ?>
				Nachname fehlt <br />
			<?php endif; ?>

			<?php if ($this->_tpl_vars['error_modif']['nosurname'] == 1): ?>
				Vorname fehlt <br />
			<?php endif; ?>
					
			<?php if ($this->_tpl_vars['error_modif']['noadress'] == 1): ?>
				Adresse 1 fehlt<br />
			<?php endif; ?>	
		
			<?php if ($this->_tpl_vars['error_modif']['nocity'] == 1): ?>
				Ortsname fehlt<br />
			<?php endif; ?>	

			<?php if ($this->_tpl_vars['error_modif']['nocp'] == 1): ?>
				Ungültige Postleitzahl<br />
			<?php endif; ?>	

			<?php if ($this->_tpl_vars['error_modif']['nophone'] == 1): ?>
				Ungültige Telefonnummer<br />
			<?php endif; ?>	
			
			<?php if ($this->_tpl_vars['error_modif']['nofax'] == 1): ?>
				Ungültige Faxnummer<br />
			<?php endif; ?>	
						
			<?php if ($this->_tpl_vars['error_modif']['noemail'] == 1): ?>
				E-Mail nicht angegeben<br />
			<?php endif; ?>	

			<?php if ($this->_tpl_vars['error_modif']['nopass'] == 1): ?>
				Altes Passwort falsch geschrieben<br />
			<?php endif; ?>	

			<?php if ($this->_tpl_vars['error_modif']['badconf'] == 1): ?>
				Passwort stimmt nicht mit dem erneut eingegebenen Passwort überein<br />
			<?php endif; ?>

			<?php if ($this->_tpl_vars['error_modif']['badpass'] == 1): ?>
				Neues Passwort ungültig. Das Passwort muss mindestens 6 Zeichen lang sein. <br />
			<?php endif; ?>	

		</p>
    </div>
    <?php endif; ?>

    <p><em>Die mit einem * versehenen Felder müssen ausgefüllt werden.</em></p>

    <form method="post" action="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=modifpref">
      <fieldset>
      <h3>Persönliche Angaben</h3>

      <p class="field">
      <label for="i_civilite">*Anrede</label>
  		<?php if ($_POST['account_civilite'] == 1): ?>
        <input type='radio' id="i_civilite" name='account_civilite' value='1' checked='checked' /> Herr
      <?php else: ?>
  			<input type='radio' id="i_civilite" name='account_civilite' value='1' /> Herr
  		<?php endif; ?>
      <?php if ($_POST['account_civilite'] == 2 || $_POST['account_civilite'] == 3): ?>
  			<input type='radio' id="i_civilite" name='account_civilite' value='2' checked='checked' /> Frau
  		<?php else: ?>
  			<input type='radio' id="i_civilite" name='account_civilite' value='2' /> Frau
  		<?php endif; ?>
      </p>
      <p class="field">
        <label for="i_nom">*Nachname</label><input type="text" name="account_nom" value="<?php echo $_POST['account_nom']; ?>
" />
      </p>
      <p class="field">
        <label for="i_prenom">*Vorname</label><input type="text" name="account_prenom" value="<?php echo $_POST['account_prenom']; ?>
" />
      </p>
      <p class="field">
        <label for="i_adresse1">*Adresse 1</label><input type="text" name="account_adresse1" value="<?php echo $_POST['account_adresse1']; ?>
" />
      </p>
      <p class="field">
        <label for="i_adresse2">Adresse 2</label><input type="text" name="account_adresse2" value="<?php echo $_POST['account_adresse2']; ?>
" />
      </p>
      <p class="field">
        <label for="i_adresse3">Adresse 3</label><input type="text" name="account_adresse3" value="<?php echo $_POST['account_adresse3']; ?>
" />
      </p>
      <p class="field">
        <label for="i_cp">*Postleitzahl</label><input type="text" name="account_cp" value="<?php echo $_POST['account_cp']; ?>
" />
      </p>
      <p class="field">
        <label for="i_ville">*Ort</label><input type="text" name="account_ville" value="<?php echo $_POST['account_ville']; ?>
" />
      </p>
      <p class="field">
        <label for="i_etat">Staat</label><input type="text" name="account_etat" value="<?php echo $_POST['account_etat']; ?>
" />
      </p>
      <p class="field">
        <label for="i_tel">*Tel.-Nr.</label><input type="text" name="account_tel" value="<?php echo $_POST['account_tel']; ?>
" />
      </p>
      <p class="field">
        <label for="i_fax">Fax-Nr.</label><input type="text" name="account_fax" value="<?php echo $_POST['account_fax']; ?>
" />
      </p>
      <p class="field">
        <label for="i_email">*E-mail</label><input type="text" name="account_email" value="<?php echo $_POST['account_email']; ?>
" />
      </p>
      <p class="field">
          <label for="i_mailing">Infobriefe abonnieren</label>
        <select name="account_mailinglist">
    		<?php if ($_POST['account_mailinglist'] == 1): ?>
    		  <option value='1' selected='selected'>Ja</option>
    		  <option value='0'>Nein</option>
    		<?php else: ?>
          <option value='1'>Ja</option>
    		  <option value='0' selected='selected'>Nein</option>
    		<?php endif; ?>
        </select>
      </p><br />
      <p class="submit">
      <input type="submit" name="modifpref" value="Speichern" />
      </p>
      </fieldset>
      </form>
      
      <form method="post" action="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=modifpref">
      <fieldset>      
      <h3>Passwort</h3>

      <p class="field">
        <label for="i_ancien">Altes</label>
        <input type="password" name="account_oldpass" value="<?php echo $_POST['account_oldpass']; ?>
" />
      </p>
      <p class="field">
        <label for="i_nouveau">Neues</label>
        <input type="password" name="account_newpass" value="<?php echo $_POST['account_newpass']; ?>
" />
      </p>
      <p class="field">
        <label for="i_confpass">Erneut eingeben</label>
        <input type="password" name="account_confpass" value="<?php echo $_POST['account_confpass']; ?>
" />
      </p>
      <p class="submit">
      <input type="hidden" name="action" value="changepassword" />
      <input type="submit" name="modifpref" value="Speichern" />
      </p>
      </fieldset>
    </form>


  <?php elseif ($_POST['modifpref']): ?>
    <h2><span class="deco">></span>Ihre Angaben wurden geändert.</h2>
    <p>
      Wir haben Ihre Änderungen übernommen. Unsere Server wurden entsprechend
      aktualisiert, die neuen Angaben sind von jetzt an gültig.
      
    </p>
  <?php endif; ?>
  
</div>