<?php /* Smarty version 2.6.31, created on 2020-10-07 09:02:06
         compiled from en/livraisonprecise.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_encode', 'en/livraisonprecise.tpl', 111, false),)), $this); ?>
<?php echo $this->_tpl_vars['scriptjava']; ?>

<div id='livraisonprecise'>
  <h2><span class="deco">></span>Step 2 - Delivery address</h2>
  <?php if ($_SESSION['error_livr']): ?>
  <div id="erreur">
  <h3>Information missing! Some fields are incomplete:</h3>
	  <?php if ($_SESSION['error_livr']['nociv'] == 1): ?>
			- Title not filled in<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['noname'] == 1): ?>
			- Last name not filled in<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['nosurname'] == 1): ?>
			- First name not filled in<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['noadress'] == 1): ?>
			- Address 1 not filled in<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['nocp'] == 1): ?>
			- Post code mandatory for this country<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcp'] == 1): ?>
			- Invalid post code<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badstate'] == 1): ?>
			- Invalid state<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcity'] == 1): ?>
			- City not filled in<br />
		<?php endif; ?>

		<?php if ($_SESSION['error_livr']['badcountry'] == 1): ?>
			- Country not filled in<br />
		<?php endif; ?>
	</div>
  <?php endif; ?>

  <p><em>Fields marked by * must be completed.</em></p>

  <form action="<?php echo $this->_tpl_vars['urlsite']; ?>
verifformlivraison.php" method="post">
	  <input type='hidden' name='livraison_precise' value='1' />
    <fieldset>
    <p class="field">
      <label for="i_civilite">*Title</label>
		<?php if (! isset ( $_SESSION['livraison_civilite'] ) || $_SESSION['livraison_civilite'] == 1): ?>
		  <input type='hidden' name='livraison_precise' value='1' />
		  <input type='radio' id="i_civilite" name='livraison_civilite' value='1' checked="checked" /> Mr.
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='1' /> Mr.
		<?php endif; ?>
		<?php if ($_SESSION['livraison_civilite'] == 2): ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='2' checked="checked" /> Mrs.
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='2' /> Mrs.
    <?php endif; ?>
		<?php if ($_SESSION['livraison_civilite'] == 3): ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='3' checked="checked" /> Miss
		<?php else: ?>
			<input type='radio' id="i_civilite" name='livraison_civilite' value='3' /> Miss
    <?php endif; ?>

    </p>
    <p class="field">
      <label for="i_nom">*Last name</label>
      <input type="text" size="39" id="i_nom" name="livraison_nom"    
      value="<?php echo $_SESSION['livraison_nom']; ?>
" />
    </p>
    <p class="field">
      <label for="i_prenom">*First name</label>
      <input type="text" size="39" id="i_prenom" name="livraison_prenom" 
      value="<?php echo $_SESSION['livraison_prenom']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse1">*Address 1</label>
      <input type="text" size="39" id="i_adresse1" name="livraison_adresse1"
      value="<?php echo $_SESSION['livraison_adresse1']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse2">Address 2</label>
      <input type="text" size="39" id="i_adresse2" name="livraison_adresse2" 
      value="<?php echo $_SESSION['livraison_adresse2']; ?>
" />
    </p>
    <p class="field">
      <label for="i_adresse3">Address 3</label>
      <input type="text" size="39" id="i_adresse3" name="livraison_adresse3" 
      value="<?php echo $_SESSION['livraison_adresse3']; ?>
" />
    </p>
    <p class="field">
      <label for="i_cp">*Post Code</label>
      <input type="text" size="9" id="i_cp" maxlength="9" name="livraison_cp" 
      value="<?php echo $_SESSION['livraison_cp']; ?>
" />
    </p>
    <p class="field">
      <label for="i_ville">*City</label>
      <input type="text" size="39" id="i_ville" name="livraison_ville" 
      value="<?php echo $_SESSION['livraison_ville']; ?>
" />
    </p>
    <p class="field">
    <label for="i_pays">*Country</label>
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
      <label for="i_etat">State/Province</label>
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