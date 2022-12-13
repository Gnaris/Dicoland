<?php /* Smarty version 2.6.31, created on 2020-10-12 17:52:33
         compiled from es/formlivraison.tpl */ ?>
<div id='formlivraison'>
  <h2><span class="deco">></span>Etapa 2 - Dirección de entrega</h2>

  <div id="currentadresse">
  <?php if ($this->_tpl_vars['infomembre']['nomsociete']): ?>Empresa <?php echo $this->_tpl_vars['infomembre']['nomsociete']; ?>
<br /><br /><?php endif; ?>
  <strong>
  <?php if ($this->_tpl_vars['infomembre']['civilite'] == 1): ?>
    Sr.
  <?php elseif ($this->_tpl_vars['infomembre']['civilite'] == 2): ?>
    Sra.
  <?php elseif ($this->_tpl_vars['infomembre']['civilite'] == 3): ?>
    Srta.
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
  <form method="post" action="verifformlivraison.php">
    <input type="hidden" name="precis" value="0" />
    <input type="image" name="livraison_submit" value="Utilizar la esta dirección" src="<?php echo $this->_tpl_vars['urlsite']; ?>
lang/<?php echo $this->_tpl_vars['applicationlang']; ?>
/img/adresse.gif" />
  </form>
  Ou
  <br />
  <br />
  <form method="post" action="verifformlivraison.php">
    <input type="hidden" name="premierpassage" value="1" />
    <input type="hidden" name="precis" value="1" />
    <input type="image" name="livraison_submit" value="Utilizar otra dirección" src="<?php echo $this->_tpl_vars['urlsite']; ?>
lang/<?php echo $this->_tpl_vars['applicationlang']; ?>
/img/autreadresse.gif" />
  </form>
  </div>
</div>