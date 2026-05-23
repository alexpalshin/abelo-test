<?php
/* Smarty version 4.5.6, created on 2026-05-23 22:14:53
  from 'C:\OSPanel\home\localhost\public\abelo-test\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a11d27db255d7_85889463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a4309b75888ab33abd78be4c24c6ff3b61d807' => 
    array (
      0 => 'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\templates\\home.tpl',
      1 => 1779552891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/post_card.tpl' => 1,
  ),
),false)) {
function content_6a11d27db255d7_85889463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5403652656a11d27d99dc80_19218695', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8575773426a11d27d99f049_83643889', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_5403652656a11d27d99dc80_19218695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5403652656a11d27d99dc80_19218695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home page<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_8575773426a11d27d99f049_83643889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8575773426a11d27d99f049_83643889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="home-page">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <section class="category-block">
                <div class="category-block__heading">
                    <h2 class="category-block__title">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['item']->value['category']['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </h2>
                    <a href="?page=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['category']['id'];?>
">View All</a>
                </div>
                
                <div class="category-block__posts-list latest-posts">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['articles'], 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/post_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['article']->value), 0, true);
?>
                    <?php
}
if ($_smarty_tpl->tpl_vars['article']->do_else) {
?>
                        <p>No articles in this category.</p>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                
            </section>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
