<?php /* Smarty version 2.6.31, created on 2020-05-13 13:56:13
         compiled from it/livraisonprecise.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_encode', 'it/livraisonprecise.tpl', 112, false),)), $this); ?>
<?php echo $this->_tpl_vars['scriptjava']; ?>

<div id='livraisonprecise'>
  <h2><span class="deco">></span>Fase 2 - Indirizzo per la consegna</h2>

  <?php if ($_SESSION['error_livr']): ?>
  <div id="erreur">
  <h3>Informazioni mancanti! Alcuni campi non sono compilati correttamente:</h3>
	  <?php if ($_SESSION['error_livr']['nociv'] == 1): ?>
			- Titolo non inserito<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['noname'] == 1): ?>
			- Cognome non inserito<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['nosurname'] == 1): ?>
			- Nome non inserito<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['noadress'] == 1): ?>
			- Indirizzo 1 non inserito<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['nocp'] == 1): ?>
			- Codice postale obbligatorio per questo paese<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcp'] == 1): ?>
			- Codice postale non valido<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badstate'] == 1): ?>
			- Stato non valido<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcity'] == 1): ?>
			- Città non inserita<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcountry'] == 1): ?>
			- Paese non inserito<br />
		<?php endif; ?>
	</div>
  <?php endif; ?>

  <p><em>I campi con l'asterisco * sono obbligatori.</em></p>

  <form action="<?php echo $this->_tpl_vars['urlsite']; ?>
verifformlivraison.php" method="post">
	  <input type='hidden' name='livraison_precise' value='1' />
    <fieldset>
    <p class="field">
      <label for="i_civilite">*Titolo</label>
		<?php if (! isset ( $_SESSION['livraison_civilite'] ) || $_SESSION['livraison_civilite'] == 1): ?>
		  <input type='hidden' name='livraison_precise' value='1' />
		  <input type='radio' id="i_civilite" name='livraison_civilite' value='1' checked="checked" /> Sig.
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='1' /> Sig.
		<?php endif; ?>
		<?php if ($_SESSION['livraison_civilite'] == 2): ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='2' checked="checked" /> Sig.ra
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='2' /> Sig.ra
    <?php endif; ?>
		<?php if ($_SESSION['livraison_civilite'] == 3): ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='3' checked="checked" /> Sig.ina
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='3' /> Sig.ina
    <?php endif; ?>

    </p>
    <p class="field">
      <label for="i_nom">*Cognome</label>
      <input type="text" size="39" id="i_nom" name="livraison_nom"    
      value="<?php echo $_SESSION['livraison_nom']; ?>
" />
    </p>
    <p class="field">
      <label for="i_prenom">*Nome</label>
      <input type="text" size="39" id="i_prenom" name="livraison_prenom" 
      value="<?php echo $_SESSION['livraison_prenom']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse1">*Indirizzo1</label>
      <input type="text" size="39" id="i_adresse1" name="livraison_adresse1"
      value="<?php echo $_SESSION['livraison_adresse1']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse2">Indirizzo2</label>
      <input type="text" size="39" id="i_adresse2" name="livraison_adresse2" 
      value="<?php echo $_SESSION['livraison_adresse2']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse3">Indirizzo3</label>
      <input type="text" size="39" id="i_adresse3" name="livraison_adresse3" 
      value="<?php echo $_SESSION['livraison_adresse3']; ?>
" />
    </p>
    <p class="field">
      <label for="i_cp">*Codice postale</label>
      <input type="text" size="9" id="i_cp" maxlength="9" name="livraison_cp" 
      value="<?php echo $_SESSION['livraison_cp']; ?>
" />
    </p>
    <p class="field">
      <label for="i_ville">*Città</label>
      <input type="text" size="39" id="i_ville" name="livraison_ville" 
      value="<?php echo $_SESSION['livraison_ville']; ?>
" />
    </p>
    <p class="field">
    <label for="i_pays">*Paese</label>
    <select name="livraison_pays" id="i_pays" onchange="testpays(this,'champs_etat');">
	    <option value=''>&nbsp;</option>
    	<?php unset($this->_sections['tabpays']);
$this->_sections['tabpays']['name'] = 'tabpays';
$this->_sections['tabpays']['loop'] = is_array($_loop=$this->_tpl_vars['tabpays']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tabpays']['show'] = true;
$this->_sections['tabpays']['max'] = $this->_sections['tabpays']['loop'];
$this->_sections['tabpays']['step'] = 1;
$this->_sections['tabpays']['start'] = $this->_sections['tabpays']['step'] > 0 ? 0 : $this->_sections['tabpays']['loop']-1;
if ($this->_sections['tabpays']['show']) {
    $this->_sections['tabpays']['total'] = $this->_sections['tabpays']['loop'];
    if ($this->_sections['tabpays']['total'] == 0)
        $this->_sections['tabpays']['show'] = false;
} else
    $this->_sections['tabpays']['total'] = 0;
if ($this->_sections['tabpays']['show']):

            for ($this->_sections['tabpays']['index'] = $this->_sections['tabpays']['start'], $this->_sections['tabpays']['iteration'] = 1;
                 $this->_sections['tabpays']['iteration'] <= $this->_sections['tabpays']['total'];
                 $this->_sections['tabpays']['index'] += $this->_sections['tabpays']['step'], $this->_sections['tabpays']['iteration']++):
$this->_sections['tabpays']['rownum'] = $this->_sections['tabpays']['iteration'];
$this->_sections['tabpays']['index_prev'] = $this->_sections['tabpays']['index'] - $this->_sections['tabpays']['step'];
$this->_sections['tabpays']['index_next'] = $this->_sections['tabpays']['index'] + $this->_sections['tabpays']['step'];
$this->_sections['tabpays']['first']      = ($this->_sections['tabpays']['iteration'] == 1);
$this->_sections['tabpays']['last']       = ($this->_sections['tabpays']['iteration'] == $this->_sections['tabpays']['total']);
?>
      	<?php if ($_SESSION['livraison_pays'] == $this->_tpl_vars['tabpays'][$this->_sections['tabpays']['index']]['abrev']): ?>
          <option value="<?php echo $this->_tpl_vars['tabpays'][$this->_sections['tabpays']['index']]['abrev']; ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['tabpays'][$this->_sections['tabpays']['index']]['nom'])) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</option>
        <?php else: ?>
          <option value="<?php echo $this->_tpl_vars['tabpays'][$this->_sections['tabpays']['index']]['abrev']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['tabpays'][$this->_sections['tabpays']['index']]['nom'])) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</option>
        <?php endif; ?>
      <?php endfor; endif; ?>
    </select>
    </p>
    <p class="field" id="champs_etat" <?php if ($_SESSION['livraison_etat']): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="champs_etat">
      <label for="i_etat">Stato/Provincia</label>
      <input type="text" size="39" id="i_etat" name="livraison_etat" 
      value="<?php echo $_SESSION['livraison_etat']; ?>
" />
    </p>
    </fieldset>
    <fieldset>
    <p class="field">
      <input type="submit" name="livraison_submit" value="ok" />
    </p>
    </fieldset>
  </form>
</div>