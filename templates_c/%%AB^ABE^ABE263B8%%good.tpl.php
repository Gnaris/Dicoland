<?php /* Smarty version 2.6.31, created on 2021-06-08 16:04:21
         compiled from de/good.tpl */ ?>
<?php if ($_GET['commande']): ?>
<div class='paiement'>
  <h2><span class="deco">></span>Herzlichen Glückwunsch</h2>
  <p>
    Sie haben Ihre Bestellung per Kreditkarte bezahlt. 
    Ihre Bestellung-Nr. <strong><?php echo $_GET['commande']; ?>
</strong> wurde entgegengenommen.
      </p>
  <p>
    Sie werden über jeden Schritt der Bestellungsabwicklung per E-Mail benachrichtigt. 
    So können Sie Schritt für Schritt 
    <a href='<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=oldcommande'>den Bearbeitungsstand Ihrer Bestellung verfolgen</a>.
    Für Fragen über die Bearbeitung Ihrer Bestellungen stehen wir Ihnen gern zur Vefügung <a href='<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=contact'>.</a>
  </p>

  <p>
    <a href='<?php echo $this->_tpl_vars['urlsite']; ?>
catalogue-dictionnaire-et-lexique-c0'>Katalogdurchsicht fortsetzen</a>
  </p>
</div>
<?php endif; ?>