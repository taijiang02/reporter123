<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2017-11-25 06:38:58
=======
/* Smarty version 3.1.30, created on 2017-11-25 05:31:58
>>>>>>> master
  from "F:\!!!kcy6013\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5a19100284a371_35175462',
=======
  'unifunc' => 'content_5a19004e671ce4_76833199',
>>>>>>> master
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa6069bf5d33d11c9371a6ebb99847434cdb7f4' => 
    array (
      0 => 'F:\\!!!kcy6013\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1511587764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5a19100284a371_35175462 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5a19004e671ce4_76833199 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master
?>
<div class="img-container">
    <div class="container">

    </div>
</div>
<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
        <div class="col-sm-4">
            <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?>
            <!-- 判斷有無封面圖 -->
            <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 " class="rounded cover">
            <!-- 沒封面圖-->
            <?php } else { ?>
            <img src="https://picsum.photos/400/300?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 " class="rounded cover">            <?php }?>
            <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</p>

        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

        <h1>尚無內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div><?php }
}
