<?php /* Smarty version 2.6.31, created on 2020-10-12 17:52:58
         compiled from es/formfraisport.tpl */ ?>
<div id='pagefraisport'>
  <h2><span class="deco">></span>Etapa 4 - Forma de envío</h2>

  <?php if ($_SESSION['erreur_fraisport'] == 1): ?>
  <div id="erreur">
  <h3>Datos incompletos. La información de algunos campos es incorrecta:</h3>
	Elija una forma de transporte.<br />
	</div>
  <?php endif; ?>

  <form method="post" action="veriffraisport.php">
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

      <?php if ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_fr): ?>Colissimo seguido (2 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == courrier_ordinaire): ?>Correo ordinario (ningún control posible)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_a): ?>Paquete postal urgente (ningún control posible, 8 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_b): ?>Paquete postal urgente (ningún control posible, 8 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_c): ?>Paquete postal urgente (ningún control posible, 10 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_prio_d): ?>Paquete postal urgente (ningún control posible, 10 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_b): ?>Paquete postal económico (ningún control posible, 10 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_c): ?>Paquete postal económico (ningún control posible, 12 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colispostal_eco_d): ?>Paquete postal económico (ningún control posible, 15 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_int): ?>Colissimo seguido internacional (4 días)
      <?php elseif ($this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['mode'] == colissimo_dom): ?>Colissimo seguido DOM (departamentos franceses de ultramar)(4 días)
      <?php endif; ?>
      - <strong><?php echo $this->_tpl_vars['frais_port'][$this->_sections['frais_port']['index']]['prix']; ?>
 €</strong><br />
    <?php endfor; endif; ?>
    <br />
    <input type='submit' name='fraisport_submit' value='ok' />
  </div>
  </form>
</div>