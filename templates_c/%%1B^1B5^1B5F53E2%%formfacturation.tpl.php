<?php /* Smarty version 2.6.31, created on 2020-10-15 11:26:11
         compiled from de/formfacturation.tpl */ ?>
<div id='formfacturation'>
  <h2><span class="deco">></span>Schritt 3 - Rechnungsadresse</h2>


  <div id="currentadresse">
  <?php if ($this->_tpl_vars['infomembre']['nomsociete']): ?>Firma <?php echo $this->_tpl_vars['infomembre']['nomsociete']; ?>
<br /><br /><?php endif; ?>

  <strong>
  <?php if ($this->_tpl_vars['infomembre']['civilite'] == 1): ?>
    Herr
  <?php elseif ($this->_tpl_vars['infomembre']['civilite'] == 2 || $this->_tpl_vars['infomembre']['civilite'] == 3): ?>
    Frau
  <?php endif; ?>
  
  <?php echo $this->_tpl_vars['infomembre']['nom']; ?>

  <?php echo $this->_tpl_vars['infomembre']['prenom']; ?>
</strong><br />
  <?php echo $this->_tpl_vars['infomembre']['adresse1']; ?>
<br />
  <?php if ($this->_tpl_vars['infomembre']['adresse2']): ?><?php echo $this->_tpl_vars['infomembre']['adresse2']; ?>
<br /><?php endif; ?>
  <?php if ($this->_tpl_vars['infomembre']['adresse3']): ?><?php echo $this->_tpl_vars['infomembre']['adresse3']; ?>
<br /><?php endif; ?>
  <?php echo $this->_tpl_vars['infomembre']['cp']; ?>
 <?php echo $this->_tpl_vars['infomembre']['ville']; ?>
<br />
  <?php echo $this->_tpl_vars['infomembre']['pays_membre']; ?>
 <?php echo $this->_tpl_vars['infomembre']['etat']; ?>
<br /><br />
  <form method="post" action="<?php echo $this->_tpl_vars['urlsite']; ?>
verifformfacturation.php">
    <input type="hidden" name="precis" value="0" />
    <input type="image" name="facturation_submit" value="Diese Adresse benutzen" src="<?php echo $this->_tpl_vars['urlsite']; ?>
lang/<?php echo $this->_tpl_vars['applicationlang']; ?>
/img/adresse.gif" />
  </form>
  Oder
  <br />
  <br />
  <form method="post" action="<?php echo $this->_tpl_vars['urlsite']; ?>
verifformfacturation.php">
    <input type="hidden" name="premierpassage" value="1" />
    <input type="hidden" name="precis" value="1" />
    <input type="image" name="facturation_submit" value="Eine andere Adresse benutzen" src="<?php echo $this->_tpl_vars['urlsite']; ?>
lang/<?php echo $this->_tpl_vars['applicationlang']; ?>
/img/autreadresse.gif" />
  </form>
  </div>
</div>