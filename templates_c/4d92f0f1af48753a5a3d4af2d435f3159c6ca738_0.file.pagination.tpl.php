<?php
/* Smarty version 4.5.6, created on 2026-05-23 23:43:03
  from 'C:\OSPanel\home\localhost\public\abelo-test\templates\partials\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a11e72710b5a6_95212108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d92f0f1af48753a5a3d4af2d435f3159c6ca738' => 
    array (
      0 => 'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\templates\\partials\\pagination.tpl',
      1 => 1779557973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a11e72710b5a6_95212108 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['currentPage']->value > 1) {?>
        <a href="?page=category&id=<?php echo $_GET['id'];?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
">Prev</a>
    <?php }?>
    
    <?php
$__section_p_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['totalPages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_0_total = $__section_p_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_p']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_p']->value['iteration'] <= $__section_p_0_total; $_smarty_tpl->tpl_vars['__smarty_section_p']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
        <?php $_smarty_tpl->_assignInScope('pNum', (isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['iteration'] : null));?>
        <?php if ($_smarty_tpl->tpl_vars['pNum']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>
            <span class="current"><?php echo $_smarty_tpl->tpl_vars['pNum']->value;?>
</span>
        <?php } else { ?>
            <a href="?page=category&id=<?php echo $_GET['id'];?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['pNum']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pNum']->value;?>
</a>
        <?php }?>
    <?php
}
}
?>
    
    <?php if ($_smarty_tpl->tpl_vars['currentPage']->value < $_smarty_tpl->tpl_vars['totalPages']->value) {?>
        <a href="?page=category&id=<?php echo $_GET['id'];?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
">Next</a>
    <?php }?>
</div><?php }
}
