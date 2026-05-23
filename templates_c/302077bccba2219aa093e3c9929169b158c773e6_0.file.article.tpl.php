<?php
/* Smarty version 4.5.6, created on 2026-05-23 23:14:58
  from 'C:\OSPanel\home\localhost\public\abelo-test\templates\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a11e092e07bb6_30834573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302077bccba2219aa093e3c9929169b158c773e6' => 
    array (
      0 => 'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\templates\\article.tpl',
      1 => 1779556495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/post_card.tpl' => 1,
  ),
),false)) {
function content_6a11e092e07bb6_30834573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3516190546a11e092a53050_87465397', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20826603226a11e092bfb424_72233865', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_3516190546a11e092a53050_87465397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3516190546a11e092a53050_87465397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_20826603226a11e092bfb424_72233865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20826603226a11e092bfb424_72233865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <article class="article-page">
        <div class="article-page__header">
            <?php if ($_smarty_tpl->tpl_vars['article']->value['image']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="article-page__image">
            <?php }?>

            <div class="article-page__header-right">
                <h2><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                
                <?php if ($_smarty_tpl->tpl_vars['article']->value['description']) {?>
                    <p class="article-page__description"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <?php }?>
                
                <div class="article-page__meta">
                    <span>Views: <?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
</span> |
                    <span>Date: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['created_at'],'%d.%m.%Y');?>
</span> |
                    <span>Categories: 
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['categories'], 'cat', true);
$_smarty_tpl->tpl_vars['cat']->iteration = 0;
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['cat']->iteration++;
$_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
$__foreach_cat_0_saved = $_smarty_tpl->tpl_vars['cat'];
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
?page=category&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->tpl_vars['cat']->last) {?>, <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </span>
                </div>
            </div>
        </div>
        
        <div class="article-page__content">
            <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

        </div>
        
        <?php if (!empty($_smarty_tpl->tpl_vars['related']->value)) {?>
            <section class="article-page__related-posts category-block">
                <h3 class="category-block__title">Related articles</h3>
                <div class="category-block__posts-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related']->value, 'rel');
$_smarty_tpl->tpl_vars['rel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rel']->value) {
$_smarty_tpl->tpl_vars['rel']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/post_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['rel']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </section>
        <?php }?>
    </article>
<?php
}
}
/* {/block 'content'} */
}
