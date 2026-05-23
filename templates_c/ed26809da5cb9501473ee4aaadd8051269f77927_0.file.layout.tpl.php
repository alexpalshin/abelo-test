<?php
/* Smarty version 4.5.6, created on 2026-05-23 21:56:51
  from 'C:\OSPanel\home\localhost\public\abelo-test\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a11ce43a23116_00201418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed26809da5cb9501473ee4aaadd8051269f77927' => 
    array (
      0 => 'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\templates\\layout.tpl',
      1 => 1779551808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a11ce43a23116_00201418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2364383956a11ce439612e1_81949727', 'title');
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Blogy.</a></h1>
        </div>
    </header>
    <main>
        <div class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15262666676a11ce439b0954_84033895', 'content');
?>

        </div>
    </main>
    <footer>
        <div class="container">
            <p>Copyright © <?php echo smarty_modifier_date_format(time(),'%Y');?>
. All rights reserved</p>
        </div>
    </footer>
</body>
</html><?php }
/* {block 'title'} */
class Block_2364383956a11ce439612e1_81949727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2364383956a11ce439612e1_81949727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Мой блог<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_15262666676a11ce439b0954_84033895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15262666676a11ce439b0954_84033895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
