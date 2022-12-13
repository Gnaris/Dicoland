<?php /* Smarty version 2.6.31, created on 2020-05-13 13:56:32
         compiled from it/formfacturation.tpl */ ?>
<div id='formfacturation'>
  <h2><span class="deco">></span>Fase 3 - Indirizzo per la fatturazione</h2>


  <div id="currentadresse">
  <?php if ($this->_tpl_vars['infomembre']['nomsociete']): ?>Azienda <?php echo $this->_tpl_vars['infomembre']['nomsociete']; ?>
<br /><br /><?php endif; ?>

  <strong>
  <?php if ($this->_tpl_vars['infomembre']['civilite'] == 1): ?>
    Sig.
  <?php elseif ($this->_tpl_vars['infomembre']['civilite'] == 2): ?>
    Sig.ra
  <?php elseif ($this->_tpl_vars['infomembre']['civilite'] == 3): ?>
    Sig.ina
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
    <input type="image" name="facturation_submit" value="Usa questo indirizzo" src="<?php echo $this->_tpl_vars['urlsite']; ?>
lang/<?php echo $this->_tpl_vars['applicationlang']; ?>
/img/adresse.gif" />
  </form>
  Ou
  <br />
  <br />
  <form method="post" action="<?php echo $this->_tpl_vars['urlsite']; ?>
verifformfacturation.php">
    <input type="hidden" name="premierpassage" value="1" />
    <input type="hidden" name="precis" value="1" />
    <input type="image" name="facturation_submit" value="Usa un altro indirizzo" src="<?php echo $this->_tpl_vars['urlsite']; ?>
lang/<?php echo $this->_tpl_vars['applicationlang']; ?>
/img/autreadresse.gif" />
  </form>
  </div>
</div>