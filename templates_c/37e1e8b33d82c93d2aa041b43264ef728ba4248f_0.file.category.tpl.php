<?php
/* Smarty version 4.5.6, created on 2026-05-23 13:18:42
  from 'C:\OSPanel\home\localhost\public\abelo-test\templates\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a1154d254fc18_07069783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e1e8b33d82c93d2aa041b43264ef728ba4248f' => 
    array (
      0 => 'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\templates\\category.tpl',
      1 => 1779513589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/post_card.tpl' => 1,
    'file:partials/pagination.tpl' => 1,
  ),
),false)) {
function content_6a1154d254fc18_07069783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6092715186a1154d253dfa4_17219396', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13952656406a1154d2544bc9_15669290', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_6092715186a1154d253dfa4_17219396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6092715186a1154d253dfa4_17219396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_13952656406a1154d2544bc9_15669290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13952656406a1154d2544bc9_15669290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="category-page category-block">
        <div class="category-block__heading">
            <h2 class="category-block__title">
                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            </h2>
            <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                <div class="category-block__description"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
            <?php }?>    
        </div>
        <div class="category-block__sorting">
            Sort by:
            <a href="?page=category&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=date"<?php if ($_smarty_tpl->tpl_vars['currentSort']->value == 'date') {?> class="active"<?php }?>>Date</a>
            |
            <a href="?page=category&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&sort=views"<?php if ($_smarty_tpl->tpl_vars['currentSort']->value == 'views') {?> class="active"<?php }?>>Views</a>
        </div>

        <div class="category-block__posts-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
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
        
        <?php if ($_smarty_tpl->tpl_vars['totalPages']->value > 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:partials/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentPage'=>$_smarty_tpl->tpl_vars['currentPage']->value,'totalPages'=>$_smarty_tpl->tpl_vars['totalPages']->value,'sort'=>$_smarty_tpl->tpl_vars['currentSort']->value), 0, false);
?>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
