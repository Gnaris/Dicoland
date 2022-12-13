<?php /* Smarty version 2.6.31, created on 2020-10-15 11:26:15
         compiled from de/formfraisport.tpl */ ?>
<div id='pagefraisport'>
  <h2><span class="deco">></span>Schritt 4 - Versandart</h2>

  <?php if ($_SESSION['erreur_fraisport'] == 1): ?>
  <div id="erreur">
  <h3>Fehlende Angaben! Einige Felder sind unvollständig ausgefüllt:</h3>
	Wählen Sie die gewünschte Transportart.<br />
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

      <?php if ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_fr): ?>Colissimo gefolgt (binnen 2 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == courrier_ordinaire): ?>Gewöhnliche Post (keine mögliche Weiterverfolgung)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_a): ?>Express (keine mögliche Weiterverfolgung, binnen 8 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_b): ?>Express (keine mögliche Weiterverfolgung, binnen 8 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_c): ?>Express (keine mögliche Weiterverfolgung, binnen 10 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_d): ?>Express (keine mögliche Weiterverfolgung, binnen 10 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_b): ?>Eco (keine mögliche Weiterverfolgung, binnen 10 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_c): ?>Eco (keine mögliche Weiterverfolgung, binnen 12 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_d): ?>Eco (keine mögliche Weiterverfolgung, binnen 15 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_int): ?>Colissimo internationale gefolgt (binnen 4 Tagen)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_dom): ?>Colissimo in Überseee-Départements gefolgt (binnen 4 Tagen)
      <?php endif; ?>
      - <strong><?php echo $this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['prix']; ?>
 €</strong><br />
    <?php endfor; endif; ?>
    <br />
    <input type='submit' name='fraisport_submit' value='ok' />
  </div>
  </form>
</div>