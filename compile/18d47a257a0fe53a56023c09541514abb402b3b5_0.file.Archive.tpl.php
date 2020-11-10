<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 12:59:02
  from 'D:\share\smarty\template\Archive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa54896a515d0_53022102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d47a257a0fe53a56023c09541514abb402b3b5' => 
    array (
      0 => 'D:\\share\\smarty\\template\\Archive.tpl',
      1 => 1604667539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tablighvasat.tpl' => 1,
    'file:section16.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa54896a515d0_53022102 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap_rtl.css">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Archive.css">
    <?php echo '<script'; ?>
 src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/54b7eb4c14.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <title>صفحه نخست</title>


</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="container">
    <section class="row ar-main-body">
        <div class="col-xs-36 col-sm-23 ar-right">
            <div class="arr-header">
                <span>آرشیو</span>
            </div>
            <div class="col-xs-36 arr-main">
                <div class="arrm-form" >
                    <div>
                        <form action="" method="post" style="display: inline">
                            <div class="row form-top">
                                <div class="col-xs-36">
                                    <span class="form-lable">سرویس:</span>
                                    <select name="ar-form-1" id="ar-form-1">
                                        <option value="0">همه</option>
                                        <option value="1">صفحه نخست</option>
                                        <option value="2">سلامت</option>
                                        <option value="3">اجتماعی</option>
                                        <option value="4">علمی</option>
                                        <option value="5">اقتصاد</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">موضوع:</span>
                                    <select name="ar-form-1" id="ar-form-2">
                                        <option value="0">همه</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">قسمت:</span>
                                    <select name="ar-form-1" id="ar-form-3">
                                        <option value="0">همه</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">از تاریخ:</span>
                                    <input type="text" value="1396/10/24" dir="ltr">
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">تا تاریخ:</span>
                                    <input type="text" value="1399/08/16" dir="ltr">
                                </div>
                                <div class="col-xs-36 col-sm-18 col-md-12">
                                    <span class="form-lable">تعداد نتایج:</span>
                                    <select name="ar-form-1" id="ar-form-3">
                                        <option value="0">20</option>
                                        <option value="0">50</option>
                                        <option value="0">100</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18 col-md-11 pull-left" style="text-align: left">
                                    <input type="submit" value="نمایش" dir="rtl">
                                </div>
                                <div class="wrapper"></div>
                            </div>
                        </form>
                        <div class="pages">
                            <span>صفحه 1 از 52</span>
                            <a href=""><i class="fa fa-caret-right"></i></a>
                        </div>
                        <div class="arrm-news">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section3']->value, 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$__foreach_news_0_saved = $_smarty_tpl->tpl_vars['news'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['news']->index == 20) {?>
                                    <?php break 1;?>
                                <?php }?>
                                <div class="arrmn-in">
                                    <i class="fa fa-square"></i>
                                    <a href="">
                                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</span>
                                    </a>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-36 col-sm-13 col-md-9 rt-left">
            <?php $_smarty_tpl->_subTemplateRender("file:tablighvasat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:section16.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </section>
</section>
<footer class="container-fluid main-Footer" >
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</footer>

</body>
</html><?php }
}
