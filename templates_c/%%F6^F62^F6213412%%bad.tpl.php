<?php /* Smarty version 2.6.31, created on 2022-07-11 17:53:58
         compiled from es/bad.tpl */ ?>
<?php if ($_GET['commande']): ?>
<div class='paiement'>
  <h2><span class="deco">></span>Falta de datos</h2>
  <p>
    Nuestro banco nos ha informado que su pago no ha podido efectuarse.
    Lamentamos comunicarle que su pedido
    con referencia <strong><?php echo $_GET['commande']; ?>
</strong> no será procesado.
  </p>
 
  <p>
    Estamos a su disposición. Para cualquier pregunta
    <a href='<?php echo $this->_tpl_vars['urlsite']; ?>
index.php?page=contact'>no dude en ponerse en contacto con nosotros.</a>
  </p>
  <p>
    <a href='<?php echo $this->_tpl_vars['urlsite']; ?>
dictionnaire-et-lexique-c0'>Continuar la visita del catálogo</a>
  </p>
</div>
<?php endif; ?>