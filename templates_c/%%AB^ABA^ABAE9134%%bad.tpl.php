<?php /* Smarty version 2.6.31, created on 2020-05-08 00:08:33
         compiled from en/bad.tpl */ ?>
<?php if ($_GET['commande']): ?>
<div class='paiement'>
  <h2><span class="deco">></span>Missing information</h2>
  <p>
    Our bank service has informed us that the payment could not be made.
    Consequently, we are sorry to inform you that your order,
    reference <strong><?php echo $_GET['commande']; ?>
</strong> will not be processed.
  </p>
 
  <p>
    However, we remain at your entire disposition, so please feel entirely 
    <a href="<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=contact">free to ask us your questions.</a>
  </p>
  <p>
    <a href="<?php echo $this->_tpl_vars['urlsite']; ?>
catalogue-dictionnaire-et-lexique-c0">Continue browsing the catalogue</a>
  </p>
</div>
<?php endif; ?>