<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-04 20:52:19
  from 'D:\share\smarty\template\section21.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa31483cfbb29_73202353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7311caaa39b550e76fe8084fdf999e6c1de1f950' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section21.tpl',
      1 => 1603286651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa31483cfbb29_73202353 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-36 col-sm-9 text-right mbm">
    <div class="col-xs-36 text-right mbm-h" >
        <span style="border-bottom: 4px solid red; padding-bottom: 0 ;"><?php echo $_smarty_tpl->tpl_vars['section21']->value['header'];?>
</span>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section21']->value['links'], 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$__foreach_news_22_saved = $_smarty_tpl->tpl_vars['news'];
?>

        <?php if ($_smarty_tpl->tpl_vars['news']->index == 0) {?>
            <div class="col-xs-36 mbm-i">
                <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt="" style="width: 100%;">
            </div>
            <div class="col-xs-36 mbm-li" >
                <a href=""><span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span></a>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['news']->index == 1) {?>
            <div class="col-xs-36 mbm-li-b">
                <i class="fa fa-square" aria-hidden="true"></i>
                <a href=""><span> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span></a>
            </div>

        <?php }?>



    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_22_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</div><?php }
}
