<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 20:44:32
  from 'C:\Users\Hosein\Desktop\smarty\template\section17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5b5b08faf84_38575527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb9ae48983be9df1ab5ceda97b5c002488847165' => 
    array (
      0 => 'C:\\Users\\Hosein\\Desktop\\smarty\\template\\section17.tpl',
      1 => 1603327844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5b5b08faf84_38575527 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-36 col-sm-9  main_butt_top" >
    <div class="col-xs-36 col-ms-36 text-right mbt-h" >
        <span style="border-bottom: 4px solid red;"><?php echo $_smarty_tpl->tpl_vars['section17']->value['header'];?>
</span>

    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section17']->value['links'], 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$__foreach_news_18_saved = $_smarty_tpl->tpl_vars['news'];
?>
        <?php if ($_smarty_tpl->tpl_vars['news']->index == 0) {?>
            <div class="col-xs-36 mbt-t" >
                <a href="#">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt="" class="mbtt-pic">
                </a>
                <div class="mbt-t-li" >
                    <a href="#">
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span>
                    </a>
                </div>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['news']->index == 1) {?>
            <div class="col-xs-36 mbt-t" >
                <a href="#">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt="" class="mbtt-pic">
                </a>
                <div class="mbt-t-li" >
                    <a href="#">
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</span>
                    </a>
                </div>
            </div>
        <?php }?>


    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_18_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</div><?php }
}
