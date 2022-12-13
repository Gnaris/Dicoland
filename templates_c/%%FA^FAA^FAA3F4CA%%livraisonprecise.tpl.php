<?php /* Smarty version 2.6.31, created on 2020-10-13 06:23:51
         compiled from es/livraisonprecise.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_encode', 'es/livraisonprecise.tpl', 112, false),)), $this); ?>
<?php echo $this->_tpl_vars['scriptjava']; ?>

<div id='livraisonprecise'>
  <h2><span class="deco">></span>Etapa 2 - Dirección de entrega</h2>

  <?php if ($_SESSION['error_livr']): ?>
  <div id="erreur">
  <h3>¡Datos incompletos! La información de algunos campos es incorrecta:</h3>
	  <?php if ($_SESSION['error_livr']['nociv'] == 1): ?>
			- Estado civil obligatorio<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['noname'] == 1): ?>
			- Apellidos obligatorios<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['nosurname'] == 1): ?>
			- Nombre obligatorio<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['noadress'] == 1): ?>
			- Dirección 1 obligatoria <br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['nocp'] == 1): ?>
			- Código postal obligatorio para este país<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcp'] == 1): ?>
			- Código postal no válido<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badstate'] == 1): ?>
			- Estado no válido<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcity'] == 1): ?>
			- Ciudad obligatoria<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcountry'] == 1): ?>
			- País obligatorio<br />
		<?php endif; ?>
	</div>
  <?php endif; ?>

  <p><em>Los campos con un asterisco * son obligatorios.</em></p>

  <form action="verifformlivraison.php" method="post">
	  <input type='hidden' name='livraison_precise' value='1' />
    <fieldset>
    <p class="field">
      <label for="i_civilite">*Estado civil</label>
		<?php if (! isset ( $_SESSION['livraison_civilite'] ) || $_SESSION['livraison_civilite'] == 1): ?>
		  <input type='hidden' name='livraison_precise' value='1' />
		  <input type='radio' id="i_civilite" name='livraison_civilite' value='1' checked="checked" /> Sr.
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='1' /> Sr.
		<?php endif; ?>
		<?php if ($_SESSION['livraison_civilite'] == 2): ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='2' checked="checked" /> Sra.
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='2' /> Sra.
    <?php endif; ?>
		<?php if ($_SESSION['livraison_civilite'] == 3): ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='3' checked="checked" /> Srta.
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='3' /> Srta.
    <?php endif; ?>

    </p>
    <p class="field">
      <label for="i_nom">*Apellidos</label>
      <input type="text" size="39" id="i_nom" name="livraison_nom"    
      value="<?php echo $_SESSION['livraison_nom']; ?>
" />
    </p>
    <p class="field">
      <label for="i_prenom">*Nombre</label>
      <input type="text" size="39" id="i_prenom" name="livraison_prenom" 
      value="<?php echo $_SESSION['livraison_prenom']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse1">*Dirección 1</label>
      <input type="text" size="39" id="i_adresse1" name="livraison_adresse1"
      value="<?php echo $_SESSION['livraison_adresse1']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse2">Dirección 2</label>
      <input type="text" size="39" id="i_adresse2" name="livraison_adresse2" 
      value="<?php echo $_SESSION['livraison_adresse2']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse3">Dirección 3</label>
      <input type="text" size="39" id="i_adresse3" name="livraison_adresse3" 
      value="<?php echo $_SESSION['livraison_adresse3']; ?>
" />
    </p>
    <p class="field">
      <label for="i_cp">*Código postal</label>
      <input type="text" size="9" id="i_cp" maxlength="9" name="livraison_cp" 
      value="<?php echo $_SESSION['livraison_cp']; ?>
" />
    </p>
    <p class="field">
      <label for="i_ville">*Ciudad</label>
      <input type="text" size="39" id="i_ville" name="livraison_ville" 
      value="<?php echo $_SESSION['livraison_ville']; ?>
" />
    </p>
    <p class="field">
    <label for="i_pays">*País</label>
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
      <label for="i_etat">Estado/Provincia</label>
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