<?php /* Smarty version 2.6.31, created on 2020-05-13 13:56:38
         compiled from it/formfraisport.tpl */ ?>
<div id='pagefraisport'>
  <h2><span class="deco">></span>Fase 4 - Modalità di spedizione</h2>

  <?php if ($_SESSION['erreur_fraisport'] == 1): ?>
  <div id="erreur">
  <h3>Informazioni mancanti! Alcuni campi non sono compilati correttamente:</h3>
	E' necessario scegliere un tipo di trasporto.<br />
  </div>
  <?php endif; ?>

  <form method="post" action="<?php echo $this->_tpl_vars['urlsite']; ?>
veriffraisport.php">
  <div id="selectport">

    <?php unset($this->_sections['frais_port']);
$this->_sections['frais_port']['name'] = 'frais_port';
$this->_sections['frais_port']['loop'] = is_array($_loop=$this->_tpl_vars['frais_port']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['frais_port']['show'] = true;
$this->_sections['frais_port']['max'] = $this->_sections['frais_port']['loop'];
$this->_sections['frais_port']['step'] = 1;
$this->_sections['frais_port']['start'] = $this->_sections['frais_port']['step'] > 0 ? 0 : $this->_sections['frais_port']['loop']-1;
if ($this->_sections['frais_port']['show']) {
    $this->_sections['frais_port']['total'] = $this->_sections['frais_port']['loop'];
    if ($this->_sections['frais_port']['total'] == 0)
        $this->_sections['frais_port']['show'] = false;
} else
    $this->_sections['frais_port']['total'] = 0;
if ($this->_sections['frais_port']['show']):

            for ($this->_sections['frais_port']['index'] = $this->_sections['frais_port']['start'], $this->_sections['frais_port']['iteration'] = 1;
                 $this->_sections['frais_port']['iteration'] <= $this->_sections['frais_port']['total'];
                 $this->_sections['frais_port']['index'] += $this->_sections['frais_port']['step'], $this->_sections['frais_port']['iteration']++):
$this->_sections['frais_port']['rownum'] = $this->_sections['frais_port']['iteration'];
$this->_sections['frais_port']['index_prev'] = $this->_sections['frais_port']['index'] - $this->_sections['frais_port']['step'];
$this->_sections['frais_port']['index_next'] = $this->_sections['frais_port']['index'] + $this->_sections['frais_port']['step'];
$this->_sections['frais_port']['first']      = ($this->_sections['frais_port']['iteration'] == 1);
$this->_sections['frais_port']['last']       = ($this->_sections['frais_port']['iteration'] == $this->_sections['frais_port']['total']);
?>
      <?php if ($this->_tpl_vars['unique'] == 1): ?>
			  <input type="hidden" name="fraisport_mode" value="<?php echo $this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode']; ?>
" />
      <?php elseif ($_SESSION['fraisport_mode'] == $this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode']): ?>
        <input type="radio" name="fraisport_mode" value="<?php echo $this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode']; ?>
" checked="checked" />
      <?php else: ?>
        <input type="radio" name="fraisport_mode" value="<?php echo $this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode']; ?>
" />
      <?php endif; ?>

      <?php if ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_fr): ?>Colissimo suivi (2 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == courrier_ordinaire): ?>Posta ordinaria (non un seguito possibile)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_a): ?>Pacco postale prioritario (non un seguito possibile, 8 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_b): ?>Pacco postale prioritario (non un seguito possibile, 8 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_c): ?>Pacco postale prioritario (non un seguito possibile, 10 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_d): ?>Pacco postale prioritario (non un seguito possibile, 10 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_b): ?>Pacco postale normale (non un seguito possibile, 10 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_c): ?>Pacco postale normale (non un seguito possibile, 12 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_d): ?>Pacco postale normale (non un seguito possibile, 15 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_int): ?>Colissimo suivi Internazionale (4 giorni)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_dom): ?>Colissimo suivi Dipartimenti d'oltremare (4 giorni)
      <?php endif; ?>
      - <strong><?php echo $this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['prix']; ?>
 €</strong><br />
    <?php endfor; endif; ?>
    <br />
    <input type='submit' name='fraisport_submit' value='ok' />
  </div>
  </form>
</div>