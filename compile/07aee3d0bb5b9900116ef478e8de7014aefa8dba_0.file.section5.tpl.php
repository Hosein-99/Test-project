<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-04 20:52:19
  from 'D:\share\smarty\template\section5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa314833d5888_55192547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07aee3d0bb5b9900116ef478e8de7014aefa8dba' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section5.tpl',
      1 => 1603285105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa314833d5888_55192547 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-36 mright-butt-right" >
    <div class="row">
        <div class="col-xs-36 mrb-r-h">
            <div class="col-xs-20 text-right mrb-r-sp">
                <span style="border-bottom: 3px solid green;"><?php echo $_smarty_tpl->tpl_vars['section5']->value['header'];?>
</span>

            </div>
            <div class="col-xs-10 text-right mrb-r-li" >
                <ul>
                    <li class="rtab1"></li>
                    <li class="rtab2"></li>
                </ul>
            </div>
        </div>


    </div>
    <div class="col-xs-36 text-right" id="rtab-1" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section5']->value['links'], 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$__foreach_news_2_saved = $_smarty_tpl->tpl_vars['news'];
?>

            <?php if ($_smarty_tpl->tpl_vars['news']->index == 0) {?>
                <div class="rtab1-in">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href="#">
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span>
                    </a>
                </div>

            <?php } else { ?>
                <div class="rtab1-in">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href="#">
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span>
                    </a>
                </div>

            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <div class="col-xs-36 mbr-in" id="rtab-2" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section5']->value['links'], 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$__foreach_news_3_saved = $_smarty_tpl->tpl_vars['news'];
?>
            <?php if ($_smarty_tpl->tpl_vars['news']->index == 2) {
break 1;
}?>
            <?php if ($_smarty_tpl->tpl_vars['news']->index == 0) {?>
                <div class="rtab1-in">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href="#">
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span>
                    </a>
                </div>

            <?php } else { ?>
                <div class="rtab1-in">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href="#">
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span>
                    </a>
                </div>

            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>

</div><?php }
}
