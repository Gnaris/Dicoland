<?php /* Smarty version 2.6.31, created on 2020-10-12 17:53:32
         compiled from es/formmodepaiement.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'es/formmodepaiement.tpl', 19, false),array('modifier', 'utf8_encode', 'es/formmodepaiement.tpl', 21, false),)), $this); ?>
<div id="recapitulatif" style="width:580px">
  <h2><span class="deco">></span>Etapa 5 - Elija una forma de pago</h2>
  
  <h3><a href="#" onclick="window.print();"><img src="<?php echo $this->_tpl_vars['urlsite']; ?>
css/print.gif" alt="Imprimir" /></a>Pedido</h3>

  <table id="panier">
  	 <caption>Pedido</caption>
  		<tr>
  			<th>Detalle</th>
  			<th>Cantidad</th>
  			<?php if ($_SESSION['ht'] == 'ht'): ?>
	  			<th style="text-align: right;">Precio sin IVA</th>
				<?php else: ?>
	 				<th style="text-align: right;">Precio con IVA</th>
  			<?php endif; ?>
  		</tr>

		<?php unset($this->_sections['basket']);
$this->_sections['basket']['name'] = 'basket';
$this->_sections['basket']['loop'] = is_array($_loop=$this->_tpl_vars['basket']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['basket']['show'] = true;
$this->_sections['basket']['max'] = $this->_sections['basket']['loop'];
$this->_sections['basket']['step'] = 1;
$this->_sections['basket']['start'] = $this->_sections['basket']['step'] > 0 ? 0 : $this->_sections['basket']['loop']-1;
if ($this->_sections['basket']['show']) {
    $this->_sections['basket']['total'] = $this->_sections['basket']['loop'];
    if ($this->_sections['basket']['total'] == 0)
        $this->_sections['basket']['show'] = false;
} else
    $this->_sections['basket']['total'] = 0;
if ($this->_sections['basket']['show']):

            for ($this->_sections['basket']['index'] = $this->_sections['basket']['start'], $this->_sections['basket']['iteration'] = 1;
                 $this->_sections['basket']['iteration'] <= $this->_sections['basket']['total'];
                 $this->_sections['basket']['index'] += $this->_sections['basket']['step'], $this->_sections['basket']['iteration']++):
$this->_sections['basket']['rownum'] = $this->_sections['basket']['iteration'];
$this->_sections['basket']['index_prev'] = $this->_sections['basket']['index'] - $this->_sections['basket']['step'];
$this->_sections['basket']['index_next'] = $this->_sections['basket']['index'] + $this->_sections['basket']['step'];
$this->_sections['basket']['first']      = ($this->_sections['basket']['iteration'] == 1);
$this->_sections['basket']['last']       = ($this->_sections['basket']['iteration'] == $this->_sections['basket']['total']);
?>
			<?php echo smarty_function_cycle(array('values' => "<tr class='normal'>,<tr class='selected'>"), $this);?>

				<td class='detail'>
					<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['basket'][$this->_sections['basket']['index']]['nom'])) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</h3>
									</td>
				<td>
					<?php echo $this->_tpl_vars['basket'][$this->_sections['basket']['index']]['quantite']; ?>

		  	</td>
				<td style="text-align: right;">
				<?php if ($_SESSION['ht'] == 'ht'): ?>
						<?php echo $this->_tpl_vars['basket'][$this->_sections['basket']['index']]['prix_unitaire_rabais_ht_for_all']; ?>
 ???
		  	<?php else: ?>
						<?php echo $this->_tpl_vars['basket'][$this->_sections['basket']['index']]['prix_unitaire_ttc_rabais_for_all']; ?>
 ???
				<?php endif; ?>
				</td>
  		</tr>
  	<?php endfor; endif; ?>
  	<tr class="lastline">
  		<td>&nbsp;</td>
  		<td>
				<br />Total sin IVA<br />
				<?php if ($_SESSION['ht'] != 'ht'): ?>
					+ IVA<br />
					Total con IVA<br /><br />
				<?php endif; ?>
				+ Portes<br />
        <strong>Total</strong>
  		</td>
  		<td style="text-align: right;">
        <br /><?php echo $this->_tpl_vars['prix_ht_total']; ?>
 ???<br />
				<?php if ($_SESSION['ht'] != 'ht'): ?>
					<?php echo $this->_tpl_vars['tva_totale']; ?>
 ???<br />
					<?php echo $this->_tpl_vars['prix_total']; ?>
 ???<br /><br />
				<?php endif; ?>
        <?php echo $this->_tpl_vars['frais_port']; ?>
 ???<br />
        <strong><?php echo $this->_tpl_vars['soustotal']; ?>
 ???</strong>
  		</td>
  	</tr>
  </table><br />
  <div>Plazo de entrega:<strong><?php echo $this->_tpl_vars['delai_max']; ?>
 d??as</strong><br /><em>(Este plazo incluye el tiempo de aprovisionamiento y de env??o).</em></div>
  
  <div id="livraison">
  <h3>Direcci??n de entrega</h3>
  <p>
  <?php if ($this->_tpl_vars['address']['livraison_civilite'] == 1): ?>
    Sr.
  <?php elseif ($this->_tpl_vars['address']['livraison_civilite'] == 2): ?>
    Sra.
  <?php else: ?>
    Srta.
  <?php endif; ?>

  <?php echo $this->_tpl_vars['address']['livraison_nom']; ?>
 <?php echo $this->_tpl_vars['address']['livraison_prenom']; ?>
<br />
  <?php echo $this->_tpl_vars['address']['livraison_adresse1']; ?>
<br />
  <?php if ($this->_tpl_vars['address']['livraison_adresse2']): ?>
    <?php echo $this->_tpl_vars['address']['livraison_adresse2']; ?>
<br />
  <?php endif; ?>
  <?php if ($this->_tpl_vars['address']['livraison_adresse3']): ?>
    <?php echo $this->_tpl_vars['address']['livraison_adresse3']; ?>

  <?php endif; ?>
  <?php echo $this->_tpl_vars['address']['livraison_cp']; ?>
 <?php echo $this->_tpl_vars['address']['livraison_ville']; ?>
<br />
  <?php echo $this->_tpl_vars['address']['livraison_etat']; ?>
 <?php echo $this->_tpl_vars['address']['livraison_pays_name']; ?>

  </p>
  </div>
  <div id="boiterecap">
		<div id="facturation">
		<h3>Adresse de facturation</h3>
		<p>
		<?php if ($this->_tpl_vars['address']['facturation_civilite'] == 1): ?>
			Sr.
		<?php elseif ($this->_tpl_vars['address']['facturation_civilite'] == 2): ?>
			Sra.
		<?php else: ?>
			Srta.
		<?php endif; ?>
		<?php echo $this->_tpl_vars['address']['facturation_nom']; ?>
 <?php echo $this->_tpl_vars['address']['facturation_prenom']; ?>
<br />
		<?php echo $this->_tpl_vars['address']['facturation_adresse1']; ?>
<br />
		<?php if ($this->_tpl_vars['address']['facturation_adresse2']): ?>
			<?php echo $this->_tpl_vars['address']['facturation_adresse2']; ?>
<br />
		<?php endif; ?>
		<?php if ($this->_tpl_vars['address']['facturation_adresse3']): ?>
			<?php echo $this->_tpl_vars['address']['facturation_adresse3']; ?>
<br />
		<?php endif; ?>
		<?php echo $this->_tpl_vars['address']['facturation_cp']; ?>
 <?php echo $this->_tpl_vars['address']['facturation_ville']; ?>
<br />
		<?php echo $this->_tpl_vars['address']['facturation_etat']; ?>
 <?php echo $this->_tpl_vars['address']['facturation_pays_name']; ?>

		</p>
		</div>
		<div id="reglement">
		<h3>Forma de pago</h3>
			<form method="post" action="verifmodepaiement.php">
			<p>
			<?php if ($_SESSION['modepaiement_mode'] == visa || ! $_SESSION['modepaiement_mode']): ?>
					<input type="radio" name="modepaiement_mode" value="visa" checked="checked"/> Tarjeta de cr??dito (pago seguro)<br />
					
			<?php elseif ($_SESSION['modepaiement_mode'] == cheque): ?>
					<input type="radio" name="modepaiement_mode" value="visa" checked="checked"/> Tarjeta de cr??dito (pago seguro)<br />
			<?php else: ?>
					<input type="radio" name="modepaiement_mode" value="visa" checked="checked"/> Tarjeta de cr??dito (pago seguro)<br />
			<?php endif; ?>
					<input type="submit" name="modepaiement_submit" value="ok">
			</p>
			</form>
		</div>
	</div>
</div>