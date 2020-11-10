<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 20:44:27
  from 'C:\Users\Hosein\Desktop\smarty\template\section5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5b5abbd6450_42735015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d0db72afdd8e97cb4a279192a73e690c673d3c6' => 
    array (
      0 => 'C:\\Users\\Hosein\\Desktop\\smarty\\template\\section5.tpl',
      1 => 1603326506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5b5abbd6450_42735015 (Smarty_Internal_Template $_smarty_tpl) {
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
