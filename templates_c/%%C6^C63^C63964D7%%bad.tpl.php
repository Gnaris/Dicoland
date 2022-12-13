<?php /* Smarty version 2.6.31, created on 2021-05-20 06:21:19
         compiled from de/bad.tpl */ ?>
<?php if ($_GET['commande']): ?>
<div class='paiement'>
  <h2><span class="deco">></span>Fehlende Angaben</h2>
  <p>
    Nach Auskunft unseres Bankservices wurde keine Zahlung erhalten. 
    Ihre Bestellung-Nr. <strong><?php echo $_GET['commande']; ?>
</strong> kann aus diesem Grunde 
    leider nicht bearbeitet werden. 
  </p>
 
  <p>
    Wir stehen aber weiterhin gern zu Ihrer Verfügung. Wenn Sie Fragen haben, 
    wenden Sie sich bitte an <a href='<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=contact'>.</a>
  </p>
  <p>
    <a href='<?php echo $this->_tpl_vars['urlsite']; ?>
catalogue-dictionnaire-et-lexique-c0'>Katalogdurchsicht fortsetzen</a>
  </p>
</div>
<?php endif; ?>