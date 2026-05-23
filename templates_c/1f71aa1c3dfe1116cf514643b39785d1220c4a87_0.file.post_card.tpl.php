<?php
/* Smarty version 4.5.6, created on 2026-05-23 22:47:34
  from 'C:\OSPanel\home\localhost\public\abelo-test\templates\partials\post_card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a11da263b2fb1_80978294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f71aa1c3dfe1116cf514643b39785d1220c4a87' => 
    array (
      0 => 'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\templates\\partials\\post_card.tpl',
      1 => 1779554848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a11da263b2fb1_80978294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\OSPanel\\home\\localhost\\public\\abelo-test\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="post-card">
    <?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="post-card__image">
    <?php }?>
    <div class="post-card__internal">
        <h3 class="post-card__title">
            <a href="?page=article&id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
        </h3>
        <div class="post-card__meta">
            <span>Views: <?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
</span>
            <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['created_at'],'%d.%m.%Y');?>
</span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['description']) {?>
            <p class="post-card__desc"><?php echo smarty_modifier_truncate(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['description'], ENT_QUOTES, 'UTF-8', true),150);?>
</p>
        <?php }?>
        <a href="?page=article&id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">Continue reading</a>
    </div>
</div><?php }
}
